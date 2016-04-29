<?php

/**
 * @param $postTitle
 * @return mixed
 */
function eliminateKeywords($postTitle)
{
    $words = array("Top", "Bottom");
    foreach ($words as $word) {
        if (endsWith($postTitle, $word)) {
            $postTitle = str_replace($word, "", $postTitle);
        }
    }
//    if (endsWith($postTitle,"ass")) {
//        $postTitle = str_replace("pass", "", $postTitle);
//        $postTitle = str_replace("Pass", "", $postTitle);
//    }
//    } 
    return $postTitle;
}

function endsWith($haystack, $needle)
{
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
}