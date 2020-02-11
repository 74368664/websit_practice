<?php
namespace name1;
function getData(){
    return "hello";
}
define('NS1',"name1");

namespace name2;
function getData(){
    return "world";
}
define('NS1',"name2");