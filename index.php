<?php
/**
 * Created by PhpStorm.
 * User: moon
 * Date: 2016/3/10
 * Time: 21:16
 */
require_once("BookProduct.php");
require_once("CDProduct.php");

$book1 = new BookProduct("title", "First Name", "Main Name", 9.99, 88, null);

print "artist : {$book1->getProducer()}\n";

print "line2 : {$book1->getNumberOfPages()}\n";

print "line3 : {$book1->getSummaryLine()}\n";

echo $book1->getSummaryLine() . "\n";
/*echo $book1->getNumPages();
echo "#####".$book1->title." #####";
$book2 = new ShopProduct(1,2,3,4,5,6);
echo $book2->getSummaryLine();
$base = "$book2->title ({$book2->producerMainName}, )";
$base .= "{$book2->producerFirstName} )";
//echo "#####".$book2->title." #####";
echo $base;*/