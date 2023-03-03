<?php

$html = file_get_contents('https://noviclicks.com');

$start = stripos($html, '<html>');

$end = stripos($html, '</html>', $offset = $start);

$length = $end - $start;

$htmlSection = substr($html, $start, $length);

$found = preg_match_all( "/<p.*?>(.*?)<\/p>/is",$htmlSection, $matches, PREG_PATTERN_ORDER);

$h_tags = "";   
    for($i=0; $i <= count($matches[0]); $i++){
          if (isset($matches[0][$i])){ 
            $h_tags .= $matches[0][$i];
          }
        }
        echo $h_tags;