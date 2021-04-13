#!/bin/sh

F=$1
EXT=${F##*.}

echo "<img src=\"data:image/$EXT;base64,"
#base64 $F
cat $F | openssl enc -e -base64
echo "\" />"
