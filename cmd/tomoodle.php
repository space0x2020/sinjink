<?php
// 
// convert svg to moodle's html
//     class="..."  to style="..."
//
// Usage: php tomoodle.php -f filename -v [1|2]
//  -v 1 : background: black
//     2 : background: white
//
date_default_timezone_set('Asia/Tokyo');
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');

$style_path  = array(
    array('ff',     'stroke:white;fill:none',  'stroke:black;fill:none'),
    array('ffrev',  'stroke:black;fill:none',  'stroke:white;fill:none'),
    array('ffw',    'fill:white',              'fill:black'),
    array('ffwrev', 'fill:black',              'fill:white'),
    array('ffnop',  'stroke:white',            'stroke:black'),
    array('d',      'stroke-dasharray:4,4',    'stroke-dasharray:4,4'),
    array('sw2',    'stroke-width:2',          'stroke-width:2'),
    array('sw3',    'stroke-width:3',          'stroke-width:3'),
    array('sw4',    'stroke-width:4',          'stroke-width:4'),
    array('sw5',    'stroke-width:5',          'stroke-width:5'),
    array('act',    'stroke:orange;fill:none', 'stroke:orange;fill:none'),
    array('actf',   'fill:orange',             'fill:orange'),
    array('th',     'fill:blue',               'fill:lightblue'),
    array('tdo',    'fill:#444444',            'fill:#D0D8DB'),
    array('tde',    'fill:#888888',            'fill:#E9EDF4'),
    array('nor1',   'stroke:red',              'stroke:red'),
    array('nor2',   'stroke:orange',           'stroke:orange')
);

$style_text = array(
    array('ff',    'fill:white;font-size:18',  'fill:black;font-size:18'),
    array('ffrev', 'fill:black;font-size:18',  'fill:white;font-size:18'),
    array('grey',  'fill:gray',                'fill:gray'),
    array('s',     'font-size:16',             'font-size:16'),
    array('ss',    'font-size:14',             'font-size:14'),
    array('sss',   'font-size:12',             'font-size:12'),
    array('l',     'font-size:20',             'font-size:20'),
    array('ll',    'font-size:24',             'font-size:24'),
    array('i',     'font-style:italic',        'font-style:italic'),
    array('b',     'font-weight:bolder',        'font-weight:bolder'),
    array('ul',    'text-decoration:underline', 'text-decoration:underline'),
    array('ol',    'text-decoration:overline',  'text-decoration:overline'),
    array('act',   'fill:orange',               'fill:orange')
);

$style_span = array(
    array('emphasis', 'font-color:yellow;font-weight:bold', 'font-color:red;font-weight:bold')
);
$styleid = 0;

$filename = '';
for ($i = 1; $i < $argc; $i++) {
    $arg = $argv[$i];
    $op = substr($arg, 0, 1);
    if ($op === "-") {
        if ($arg == '-f') {
            $filename = $argv[$i+1];
            $i++;
        } else if ($arg == '-v') {
            $styleid = $argv[$i+1];
            $styleid--;
            $i++;
        }
    }
}

if (empty($filename) || $styleid < 0 || $styleid > 1) {
    print "Usage: -f filename [-v (1|2)]\n";
    return;
}
mainprocess($filename);

function mainprocess($htmlfilename)
{
    global $styleid;

    $pinfo = pathinfo($htmlfilename);
    $fp = fopen($htmlfilename, 'r');
    if ($fp) {
        // read head
        $stylefile = null;
        while ($line = fgets($fp)) {
            if (preg_match('/<link .* href="(.*)"/', $line, $matches0) > 0) {
                 $stylefile = $matches0[1];
            }
            if (preg_match('/<link .* href="(.*)\?.*"/', $line, $matches0) > 0) {
                 $stylefile = $matches0[1];
            }
            if (strpos($line, '</head') !== false) {
                break;
            }
        }
        // insert style file
        if (!empty($stylefile)) {
            if (!empty($pinfo['dirname'])) {
                $zstylefile = $pinfo['dirname'] . '/' . $stylefile;
            } else {
                $zstylefile = $stylefile;
            }
            $fpstyle = fopen($zstylefile, 'r');
            if ($fpstyle) {
                print '<defs>' . "\n";
                print '<style type="text/css"><!--' . "\n";
                while ($sline = fgets($fpstyle)) {
                    print $sline;
                }
                fclose($fpstyle);
                print '-->' . "\n";
                print '</style></defs>' . "\n";
            }
        }

        $skipf = 0;
        $inbody = 0;
        while ($line = fgets($fp)) {
            if ($inbody == 0 && strpos($line, '<body') !== false) {
                $inbody = 1;
                continue;
            }
            if ($inbody == 1 && strpos($line, '</body') !== false) {
                $inbody = 0;
                continue;
            }
            if ($inbody == 0) {
                continue;
            }

            $nline = $line;
            if ($skipf == 1) {
                if (strpos($line, '</div>') !== false) {
                    $skipf = 0;
                }
                continue;
            }
            $svgstyle = strpos($line, '<div id="svgstyle"');
            if ($svgstyle !== false) {
                $skipf = 1;
                continue;
            }
            if ($styleid == 0) { //V1
                $i1 = strpos($line, '/*V2*/');
                if ($i1 !== false) {
                    continue;
                }
            } else if ($styleid == 1) {// V2
                $i1 = strpos($line, '/*V1*/');
                if ($i1 !== false) {
                    continue;
                }
                $i1 = strpos($line, '/*V2*/');
                if ($i1 !== false) {
                    if (preg_match('/\/\*(.*?)\*\//', $line, $matches0) > 0) {
                        $nline = '  ' . $matches0[1] . "\n";
                    }
                    print $nline;
                    continue;
                }
            }
            if (preg_match('/(.*<*?) (.*?)(class=".*?")(.*?)(\/*?)>(.*)/', $line, $matches) > 0) {
                // <element class="classin=ss" [style="stylein"] ...

                $element = $matches[1];
                $i0 = strpos($element, '<');
                if ($i0 >= 0) {
                    $element = substr($element, $i0 + 1);
                }
                $classin = $matches[3];
                $ss = $matches[4];
                $stylein = '';
                if (preg_match('/(.*?)(style=".*?")(.*?)/', $ss, $matches2) > 0) {
                    $stylein = $matches2[2];
                    $ss = $matches2[1] . $matches2[3];
                }
                $stylee = classTostyle($element, $classin, $stylein);
                if (!empty($stylee)) {
                    $nline = $matches[1] . $matches[2] . $ss . ' ' . $stylee . ' ' . $matches[5] . '>' . $matches[6] . "\n";
                }
            }
            if (preg_match('/<img src="(.*)".*?\/?>/', $line, $matches) > 0) {
                $imgfile = pathinfo($matches[1], PATHINFO_FILENAME) . '.b64';
                if (file_exists($imgfile)) {
                    $imgfp = fopen($imgfile, 'r');
                    if (!is_null($imgfp)) {
                        while (!feof($imgfp)) {
                            $imgline = fgets($imgfp);
                            print $imgline;
                        }
                        fclose($imgfp);
                        $nline = '';
                    }
                }
            }
            print $nline;
        }
        fclose($fp);
    }
}

function classTostyle($element, $classelist, $stylein)
{
    global $styleid;
    global $style_path, $style_text, $style_span;

    if ($element == 'text') {
        $style_list = $style_text;
    } else if ($element == 'path' || $element == 'line' || $element == 'rect' ||
               $element == 'circle' || $element == 'ellipse') {
        $style_list = $style_path;
    } else if ($element == 'span') {
        $style_list = $style_span;
    } else {
        return '';
    }

    if (preg_match('/class="(.*)"/', $classelist, $m) > 0) {
        $classelist = $m[1];
    }
    $classe = explode(' ', $classelist);

    $styles= '';
    $f = 0;
    foreach ($classe as $s) {
        foreach($style_list as $st) {
            if ($s == $st[0]) {
                if ($styles != '')
                    $styles .= ';';
                $styles .= $st[$styleid + 1];
                $f = 1;
                break;
            }
        }
        if ($f == 0) {
            print "Uknown class : " . $s . "\n";
        }
    }
    if (!empty($stylein) && preg_match('/style="(.*)"/', $stylein, $matchess) > 0) {
        if ($styles != '')
            $styles .= ';';
        $styles .= $matchess[1];
    }
    if ($styles != '') {
        $styles = ' style="' . $styles . '"';
    }
    return $styles;
}

function searchpath($searchpath, $filename) {
    $found = false;
    foreach ($searchpath as $spath) {
        $path = $spath . "/" . $filename;
        if (file_exists($path)) {
            $found = $path;
            break;
        }
    }
    return $found;
}

?>
