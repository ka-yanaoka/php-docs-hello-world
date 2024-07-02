<?php

echo "1";

$filename = '/mntfilestream.txt';
 
//ファイルがすでに存在する場合には処理を行わない
if(!file_exists($filename)){
    touch($filename);
}

echo "2";
