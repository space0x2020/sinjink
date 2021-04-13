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

$indent     =  4;
$lineheight = 20;
$htab       = 40;
$linenow    = 40;
$gap        = 10;
$startx     = $linenow + $gap;
$starty     = $lineheight;

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
    global $indent;
    global $styleid;
    global $lineheight;
    global $htab;
    global $linenow;
    global $gap;
    global $startx;
    global $starty;


    $linenotag1 = '<text class="ff s"';
    $linenotag2 = 'text-anchoe="right"'; 

    $fp = fopen($htmlfilename, 'r');
    $lineno = 1;
    $py= $starty;
    if ($fp) {
        while ($line = fgets($fp)) {
            // print lineno
            $line = rtrim($line);
            for ($j = 0; $j < $indent; $j++)
                print " ";
            print '<text class="ff s" x="' . $linenow . '" y="' . $py . '" ';
            print 'text-anchor="end">';
            print $lineno . ':';
            print "</text>\n";
            if ($line != "") {
                $sx = $linenow + $gap;
                do {
                    if ($line != "") {
                        $tline = substr($line, 0 ,4);
                        if ($tline == "    ") {
                            $line = substr($line, 4);
                            $sx += $htab;
                        } else {
                            break;
                        }
                    }
                } while (!tline != "    ");
                for ($j = 0; $j < $indent; $j++)
                    print " ";
                print '<text class="ff s" x="' . $sx . '" y="' . $py . '">';
                print $line;
                print "</text>\n";
            }
            $lineno++;
            $py += $lineheight;
        }
        fclose($fp);
    }
}

?>
