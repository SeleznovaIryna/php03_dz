<?php
//$x = "ffff";
//ob_start();
//include 'content.php';
//$content = ob_get_clean();
//include 'template.php';

//functions!!!

//function vasia($a,$b){
//    return ($a+$b);
//}
//$x = 'vasia';
//echo call_user_func_array($x,[10,2]);

//   function f(){
//       $y = 19;
//
//       $f = function () use ($y){
//           echo $y;
//       };
//       $f();
//   };
//   f();
//   f();

//function name($a,$b=0){
//    echo $a+$b;
//} name(5,2);

//ссылки1
//$a = 10;
//$b = &$a;
//$b = 5;
//echo $a;

//ссылки2
//function swap(&$a,&$b){
//    $buf = $a;
//    $a = $b;
//    $b = $buf;
//}
//$x = 10;
//$y = 5;
// swap($x,$y);
// echo $x.":".$y;

define("DOCROOT", $_SERVER["DOCUMENT_ROOT"]."/php03");
include DOCROOT . '/functions.inc';

//renderTemplate('template', 'Hello');

$page = empty($_GET['page'])?"main":$_GET['page'];


$_ROUTES = [
    "main"=>"main.main",
    "contacts"=>"main.contacts",
    "content"=>"main.content",
    "photos"=>"main.photos",
    "404"=>"404.error"
];

if(empty($_ROUTES[$page])) $page='404';
list($logicfile,$pagefunc) = explode(".",$_ROUTES[$page]);

loadPage($logicfile,$pagefunc);
