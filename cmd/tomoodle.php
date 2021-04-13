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

$includepath = array();
$verbose = false;

$style_span = array(
    array('emphasis', 'font-color:yellow;font-weight:bold', 'font-color:red;font-weight:bold')
);
$styleid = 0;

$filename = '';
for ($i = 1; $i < $argc; $i++) {
    $arg = $argv[$i];
    $op = substr($arg, 0, 2);
    if ($op === "-f") {
        $filename = $argv[$i+1];
        $i++;
    } else if ($op == '-V1') {
        $styleid = 0;
        $i++;
    } else if ($op == '-V2') {
        $styleid = 1;
        $i++;
    } else if ($op == '-I') {
        $argopt = substr($arg, 2);
        $q = explode(':', $argopt);
        foreach ($q as $q0) {
            array_push($includepath, $q0);
        }
    } else if ($arg == "-v") {
        $verbose = true;
    }
}
array_push($includepath, ".");

if ($styleid < 0 || $styleid > 1) {
    print "Usage: [-f filename] [-V1|-V2)]\n";
    return;
}
if ($verbose) {
    print "SEARCHPATH:\n";
    foreach ($includepath as $incpath) {
        print "  " . $incpath . "\n";
    }
}
mainprocess($filename);

function mainprocess($htmlfilename)
{
    global $styleid;
    global $includepath;

    if (empty($htmlfilename)) {
        $fp = STDIN;
    } else {
        $fp = fopen($htmlfilename, 'r');
        if (empty($fp)) {
            print "Cannot open " . $htmlfilename . "\n";
            return;
        }
    }

    if ($fp) {
        // read head
        $stylefilelist = array();
        while ($line = fgets($fp)) {
            if (preg_match('/<link .* href="(.*)"/', $line, $matches0) > 0) {
                 array_push($stylefilelist, $matches0[1]);
            }
            if (preg_match('/<link .* href="(.*)\?.*"/', $line, $matches0) > 0) {
                 array_push($stylefilelist, $matches0[1]);
            }
            if (strpos($line, '</head') !== false) {
                break;
            }
        }
        // insert style file
        foreach ($stylefilelist as $stylefile) {
            $stylef = searchpath($includepath, $stylefile);
            if ($stylef !== false) {
               $fpstyle = fopen($stylef, 'r');
                print '<defs>' . "\n";
                print '<style type="text/css"><!--' . "\n";
                while ($sline = fgets($fpstyle)) {
                    print $sline;
                }
                fclose($fpstyle);
                print '-->' . "\n";
                print '</style></defs>' . "\n";
            } else {
                fputs(STDERR, "tomoodle: Cannot open " . $stylefile . "\n");
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
            if (preg_match('/<img src="(.*)".*?\/?>/', $line, $matches) > 0) {
                $imgfilename = pathinfo($matches[1], PATHINFO_FILENAME) . '.b64';
                $imgfile = searchpath($includepath, $imgfilename);
                if ($imgfile !== false) {
                    $imgfp = fopen($imgfile, 'r');
                    if (!is_null($imgfp)) {
                        while (!feof($imgfp)) {
                            $imgline = fgets($imgfp);
                            print $imgline;
                        }
                        fclose($imgfp);
                        $nline = '';
                    }
                } else {
                    fputs(STDERR, "tomoodle: Cannot open " . $imgfilename . "\n");
                }
            }
            print $nline;
        }
        if ($fp != STDIN)
            fclose($fp);
    }
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
