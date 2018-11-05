<?php
/**
 * Created by PhpStorm.
 * User: alexnguyen
 * Date: 05/11/2018
 * Time: 08:37
 */
include_once ('LinkList.php');
$linkedList = new LinkList();
$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();
echo $totalNodes;
echo implode ('-' , $linkData);