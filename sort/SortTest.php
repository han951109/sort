<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2016/11/28
 * Time: 15:49
 */
include "Sort.php";

$sortArray = [4,3,2,8]; //需要排序的数组
$Sort      = new Sort();
$Sort->printArray($sortArray);
echo '冒泡';
$Sort->printNewArray($Sort->bubbleSort($sortArray));
echo '选择';
$Sort->printNewArray($Sort->selectionSort($sortArray));
echo '插入';
$Sort->printNewArray($Sort->insertionSort($sortArray));
echo '快速';
$Sort->printNewArray($Sort->quickSort($sortArray));
echo '希尔';
$Sort->printNewArray($Sort->shellSort($sortArray));