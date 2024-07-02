<?php
$filename = '/mnt/filestream.txt';
if(!file_exists($filename)){
    touch($filename);
}
echo "4";
