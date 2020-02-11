<?php
namespace beijing\name1;
function getData(){
    return "hello";
}
const NS1="name1";

namespace shanghai\name2;
function getData(){
    return "world";
}
const NS1="name2";

namespace beijing;
function getData(){
    return "world";
}
const NS1="name2";

echo getData();//非限定名称访问方式
echo name1\NS1; // 限定名称访问方式
echo \beijing\name1\NS1; // 完全限定名称访问方式
