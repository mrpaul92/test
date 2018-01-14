<?php

    /**
     *  last fix serious ===
     */
    define('R_URL', 'https://m.ah-me.com');
    define('T_URL', 'https://ahmestatic.fuckandcdn.com');


// bypass hotlink protection
$opts = array('http' =>
array(
'method'  => 'GET',
'header'  => 'Referer: '.R_URL,
)
);

$context  = stream_context_create($opts);

header('Content-Type: image/jpeg');
echo file_get_contents(T_URL.'/ah-me/thumbs/'.$_GET['img'], false, $context);
