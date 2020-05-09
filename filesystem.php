<?php
// file_put_contents('book.txt',"<h1 style='text-align: center'>This is My Book</h1>"); 
// echo file_get_contents('book.txt');
// echo "</br> __File__" . __FILE__;
// echo "</br> __Dir__" . __DIR__;

// echo "<pre>";
// print_r (pathinfo(__FILE__));
// echo "</pre>";

// echo "<pre>";
// print_r (scandir(__DIR__));
// echo "</pre>";
$GLOBALS['name'] = "Ahmed";
function AskforName(){
    echo $GLOBALS['name'];
}
AskforName();
?>