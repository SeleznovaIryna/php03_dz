<?php

function getRootPath($path="/"){
    return DOCROOT.$path;
}

function renderTemplate($template,$data){
    ob_start();
    extract($data);
    include getRootPath("/templates/".$template.".php");
    return ob_get_clean();
}

function renderView($view,$data=[]){
    ob_start();
    extract($data);
    include getRootPath("/views/".$view.".php");
    return ob_get_clean();
}

function renderViewsWithTemplate($view,$template,$data=[]){
    $content = renderView($view,$data);
    $data["content"]=$content;
    return renderTemplate($template,$data);
}

function loadPage($logicfile,$pagefunc){
    include getRootPath('/pagelogic/'.$logicfile.'.php');
    call_user_func($pagefunc.'Page');
}