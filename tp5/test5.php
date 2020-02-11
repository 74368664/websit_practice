<?php
namespace name1;
function getData(){
    return "hello";
}
const NS1="name1";

namespace name2;
function getData(){
    return "world";
}
const NS1="name2";

echo \name1\getData();