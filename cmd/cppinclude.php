<?php
// 
// cpp [-Ipath] [-Dxxxx]
//
date_default_timezone_set('Asia/Tokyo');
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
$verbose = 0;

$includepath = array();
$deflist = array();
$filename = "";
$debug = 0;
//----------------------------------------------------------------------
//  start main program
//
$ifdeflevel = 0;
$ifdefcontext = array();
$ifdefcontext[$ifdeflevel] = true;

for ($i = 1; $i < $argc; $i++) {
    $arg = $argv[$i];
    $op = substr($arg, 0, 2);
    if ($op == "-I") {
        $argopt = substr($arg, 2);
        $q = explode(':', $argopt);
        foreach ($q as $q0) {
            array_push($includepath, $q0);
        }
    } else if ($op == "-C") {
        ;// ignore
    } else if ($op == "-D") {
        $argopt = substr($arg, 2);
        array_push($deflist, $argopt);
    } else if ($op == "-v") {
        $verbose++;
    } else {
        $filename = $arg;
    }
}
array_push($includepath, ".");

if ($verbose > 0) {
    print "INCPATH:\n";
    foreach ($includepath as $incp) {
        print "[" . $incp . "]\n";
    }
    print "DEF LIST\n";
    foreach ($deflist as $def) {
        print "[" . $def . "]\n";
    }
    print "FILENAME: " . $filename . "\n";
}

mainprocess($filename, false);

//----------------------------------------------------------------------
//  functions
//----------------------------------------------------------------------
// main-process
function mainprocess($htmlfilename, $htmlesc)
{
    global $includepath;
    global $deflist;
    global $ifdeflevel;
    global $ifdefcontext;

    if (empty($htmlfilename)) {
        $fp = STDIN;
    } else {
        if (file_exists($htmlfilename) === false) {
            fputs(STDERR, "Cannot open " . $htmlfilename . "\n");
            return;
        }
        $fp = fopen($htmlfilename, 'r');
    }

    if ($fp) {
        while ($line = fgets($fp)) {
            $len = strlen($line);
            if ($len > 0) {
                $c = $line[0];
                if ($c == '#') {
                    $cppcmd = trim(substr($line, 1));
                    if (preg_match('/^(\w+)$/', $cppcmd, $matches) > 0) {
                        $cppcmd = $matches[1];
                        $cppopt = "";
                        execcppcmd($cppcmd, $cppopt);
                    } else if (preg_match('/^(\w+)\s+"?([\w\.\+\-]+)"?/', $cppcmd, $matches) > 0) {
                        $cppcmd = $matches[1];
                        $cppopt = $matches[2];
                        execcppcmd($cppcmd, $cppopt);
                    }
                } else {
                    if ($ifdefcontext[$ifdeflevel] === true) {
                        if ($htmlesc === false)
                            print $line;
                        else
                            print htmlspecialchars($line);
                    }
                }
            }
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

function execcppcmd($cppcmd, $cppopt) {
    global $includepath;
    global $deflist;
    global $ifdeflevel;
    global $ifdefcontext;

    if ($cppcmd == "ifdef") {
        $ifdeflevel++;
        $ifdefcontext[$ifdeflevel] = false;
        foreach ($deflist as $defs) {
            if ($defs == $cppopt) {
                $ifdefcontext[$ifdeflevel] = true;
                break;
            }
        }
    } else if ($cppcmd == "else") {
        $ifdefcontext[$ifdeflevel] = !$ifdefcontext[$ifdeflevel];
    } else if ($cppcmd == "endif") {
        $ifdeflevel--;
        if ($ifdeflevel < 0)
            $ifdeflevel = 0;
    } else {
        if ($ifdefcontext[$ifdeflevel] === true) {
            if ($cppcmd == "include" || $cppcmd == "htmlinclude") {
                $htmlesc = false;
                if ($cppcmd == "htmlinclude")
                    $htmlesc = true;
            
                $path = searchpath($includepath, $cppopt);
                if ($path !== false) {
                        $ifdeflevel++;
                        $ifdefcontext[$ifdeflevel] = true;
                        mainprocess($path, $htmlesc);
                        $ifdeflevel--;
                } else {
                    fputs(STDERR, "Cannot open " . $cppopt . "\n");
                }
            } else if ($cppcmd == "define") {
                array_push($deflist, $cppopt);
            } else {
                fputs(STDERR, "Uknown command " . $cppcmd . "\n");
            }
        }
    }
}
?>
