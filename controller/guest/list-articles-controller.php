<?php

$articleJsonFilepath = '../../model/articles.json';

$articleJson = file_get_contents($articleJsonFilepath);

$article = json_decode($articleJson, true);

function isContentTooLong($stringTooLong){
    return mb_strlen($stringTooLong,'UTF-8') > 30 ;
}

function shortenString($stringToCut){
    return substr($stringToCut,0,30);
}

require_once('../../view/guest/list-articles-view.php');

?>