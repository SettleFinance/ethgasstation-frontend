<?php 
  $ch = curl_init();
  curl_setopt_array(
  $ch, array(
  CURLOPT_URL => 'https://ethgasstation.info/blog/wp-json/wp/v2/posts?per_page=1',
  CURLOPT_RETURNTRANSFER => true
  ));

  function strLastReplace($mainStr, $search, $replace) {
    return strrev(implode(strrev($replace), explode(strrev($search), strrev($mainStr, 2))));
  }

  $output = curl_exec($ch);
  $decodedData = json_decode($output);
  $link = $decodedData[0]->link;

  if (strpos($link, 'https://ethgasstation.info') == false) {
    $link = "https://ethgasstation.info" . $link;
  }

  echo "<div class='blog_post_title'><a href=" . $link . " class='post_title' target='_blank'>" . $decodedData[0]->title->rendered . "</a></div><span><a href=" . $link . " class='post_external_link' target='_blank'><span>Read on EGS NEWS</span> <img class='right_arrow' src='/images/right-arrow.svg'> </a></span>";
?>