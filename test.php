<?php
require 'isdownloadable.php';
$url='https://cio.com.br/RSS2/';
if(isDownloadable($url)){
    print $url.' é descarregável'.PHP_EOL;
}else{
    print $url.' não é descarregável'.PHP_EOL;
}
