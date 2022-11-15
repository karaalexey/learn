<?php

use lrn\structuralPattern\bridge;

include "../../vendor/autoload.php";

echo "Win book:";
$laptop = new bridge\PC();
$touch = new bridge\TouchPad($laptop);
$touch->select();
$touch->treeFingers();
echo "\n";

echo "Macbook: ";
$bookPro = new bridge\Mac();
$tBar = new bridge\TouchPad($bookPro);
$tBar->properties();
$tBar->treeFingers();
echo "\n";

echo "Game PC:";
$gamePc = new bridge\PC();
$mous = new bridge\Mouse($gamePc);
$mous->sideButton();
$mous->scrollDown();
echo "\n";

echo "Mac PC:";
$powerG = new bridge\Mac();
$magicMouse = new bridge\Mouse($powerG);
$magicMouse->sideButton();
$magicMouse->scrollUp();
