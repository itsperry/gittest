<?php
//Created by Legendary-waffle
//Created: 2019
include 'content/default/header.php';

switch ($p) {
  case 'home':
    include 'content/pages/home/index.php';
    break;
  case 'adduser':
    include 'content/pages/user/create.php';
    break;

  default:
    include 'content/pages/home/index.php';
    break;
}

include 'content/default/footer.php';
?>
