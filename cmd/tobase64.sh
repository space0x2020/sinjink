#!/bin/sh

F=$1
EXT=${F##*.}

echo "<img src=\"data:image/$EXT;base64,"
cat $F | openssl enc -e -base64
echo "\" />"
