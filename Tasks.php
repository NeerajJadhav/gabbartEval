<?php

/**
 * Example 1: Given the String $alpha_statement output in reverse order, Both by words and by letters.
 * For example if $alpha_statement = "Hello World!", output 1 would be "World Hello" and output 2 would be "dlroW olleH"
 */

$alpha_statement = "Wherever you fly, you will be best of the best. Wherever you go, you will top all the rest. Except when you do not. I am sorry to say so but, sadly, it is true that Bang-ups and Hang-ups can happen to you.";
echo "<h2>Task 1: With special characters</h2><h4>String reverse by words</h4><br>";
//by words. Periods, exclamations are assumed to be not part of a word.

$pattern = '/[!.,]/';
$arr = explode(' ',$alpha_statement);
$size = count($arr);
$matches = [];
for($i = $size-1; $i>=0;$i--){
    if(preg_match($pattern,$arr[$i],$matches)){
//        var_dump($matches);
        $arr[$i]=str_replace($matches[0],'',$arr[$i]);
        echo $matches[0];
    }
    echo $arr[$i]."\t";

}

echo "<h4>String reverse by letters</h4><br>";
//by letters
$length = strlen($alpha_statement);
for ($i=$length-1;$i>=0;$i--){
    echo $alpha_statement[$i];
}

echo "<h2>Task 1: Removing special characters</h2><h4>String reverse by words</h4><br>";
$pattern = '/[!.,]/';
$alpha_statement = preg_replace($pattern,'',$alpha_statement);
$arr = explode(' ',$alpha_statement);
$size = count($arr);
for($i = $size-1; $i>=0;$i--){
    echo $arr[$i]."\t";
}

echo "<h4>String reverse by letters</h4><br>";
//by letters
$length = strlen($alpha_statement);
for ($i=$length-1;$i>=0;$i--){
    echo $alpha_statement[$i];
}















/**
 * Example 2: Given 2 single dimensional arrays $a and $b Provide the following output
 * a) Standard Merge of the two arrays
 * b) Merge of the two arrays with Unique values
 * c) Alternating merge of the arrays so that if $a = [1, 2, 3] and $b = [4, 5, 6] the output would be $c = [1, 4, 2, 5, 3, 6]
 */
$a = ["dog", "cat", "mouse", "horse", "bird", "fish", "moose", "rabbit", "flower", "taco", "smile"];
$b = ["John", "Tom", "flower", "taco", "smile", "Matt", "Mark", "Luke", "David", "Sarah", "Beth", "Betty"];


//Standard merging
echo "<h2>Task 2: Array Manipulation</h2><h4>Standard Merge</h4><br>";
$merged = array_merge($a,$b);
printArray($merged);

// Merging unique elements
echo "<h4>Standard merge unique elements</h4><br>";
$uniqueArr = array_unique($merged);
printArray($uniqueArr);

// Merging alternate elements
echo "<h4>Alternate elements</h4><br>";
$alternateArr = [];
$aSize = count($a);
$bSize = count($b);
$totalSize = $aSize+$bSize;


for ($i=0;$i<$totalSize;$i++){
    if($i<$aSize)//For arrays that are not equal in length
        $alternateArr[]=$a[$i];
    if($i<$bSize)
        $alternateArr[]=$b[$i];
}
printArray($alternateArr);

// Array display function
function printArray($arr){
    foreach ($arr as $item) {
        echo print_r($item,1).PHP_EOL;
    }
}