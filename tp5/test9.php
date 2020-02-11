<?php
namespace beijing\name1;
function getData(){
    return "hello";
}
class Object{
    public $obj = "hello obj";
}
const NS1="name1";

namespace shanghai\name2;
function getData(){
    return "world";
}
const NS1="name2";

use beijing\name1\Object;

$obj = new Object;
echo  $obj->obj;
