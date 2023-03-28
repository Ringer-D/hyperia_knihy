<?php

// comparison function
function compareByBookPrice($a, $b) {
    if ($a['bookPrice'] == $b['bookPrice']) {
      return 0;
    }
    return ($a['bookPrice'] < $b['bookPrice']) ? -1 : 1;
  }