<?php



class sort
{
    //冒泡排序
    public function bubbleSort($sortArray)
    {
        //对数组进行排序
        for ($i = 1; $i < count($sortArray); $i++) {
            for ($j = 0; $j < (count($sortArray) - $i); $j++) { //已经排过序的下次不参与排序
                if ($sortArray[$j] > $sortArray[$j + 1]) {   //比较相邻位置的数组元素大小
                    /*交换位置*/
                    $temp              = $sortArray[$j];
                    $sortArray[$j]     = $sortArray[$j + 1];
                    $sortArray[$j + 1] = $temp;
                }
            }
        }
        return $sortArray;
    }
    //选择排序
    public function selectionSort($sortArray)
    {

        //对数组进行排序
        for ($i = 0; $i < count($sortArray) - 1; $i++) {
            for ($j = $i + 1; $j <= count($sortArray) - 1; $j++) {
                if ($sortArray[$i] > $sortArray[$j]) { //与每个元素与第一个元素进行比较
                    //交换位置
                    $temp          = $sortArray[$i];
                    $sortArray[$i] = $sortArray[$j];
                    $sortArray[$j] = $temp;
                }
            }
        }
        return $sortArray;
    }
    //插入排序
    public function insertionSort($sortArray)
    {

        //对数组进行排序
        for ($i = 1; $i < count($sortArray); $i++) {
            $temp = $sortArray[$i];
            $j    = $i - 1;
            while ($j >= 0 && $sortArray[$j] > $temp) {
                $sortArray[$j + 1] = $sortArray[$j];
                --$j;
            }
            $sortArray[$j + 1] = $temp;
        }
        return $sortArray;
    }
    //快速排序
    public function quickSort($sortArray)
    {
        //对数组进行排序
        $count = count($sortArray);
        if ($count <= 1) {
            return $sortArray;
        }
        $key  = $sortArray[0];
        $left = $right = [];
        for ($i = 1; $i < $count; $i++) {
            if ($sortArray[$i] < $key) {
                $left[] = $sortArray[$i];
            } else {
                $right[] = $sortArray[$i];
            }
        }
        $left          = $this->quickSort($left); //小于初始值放于左边
        $right         = $this->quickSort($right);
        $newSortArray  = array_merge($left, [$key], $right);

        return $newSortArray;
    }
    //希尔排序
    public function shellSort($sortArray)
    {

        $len = count($sortArray);
        for($step = floor($len/2);$step>0;$step=floor($step/2)){
            for($i=$step;$i<$len;$i++){
                for( $j = $i-$step ; $j>=0 && $sortArray[$j+$step]<$sortArray[$j] ;$j-=$step){
                    $temp = $sortArray[$j+$step];
                    $sortArray[$j+$step] = $sortArray[$j];
                    $sortArray[$j] = $temp;
                }
            }
        }
        return $sortArray;
    }
    public function printArray($sortArray)
    {
        echo '初始数组为：';

        for ($i = 0; $i < count($sortArray); $i++) {
            echo $sortArray[$i] . ',';
        }
        echo '<br/>';
    }
    public function printNewArray($sortArray)
    {
        echo '排序后的数组为：';

        for ($i = 0; $i < count($sortArray); $i++) {
            echo $sortArray[$i] . ',';
        }
        echo '<br/>';
    }
}


