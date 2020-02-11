<?php

const NS1="命名空间";

include("./test9.php");

echo NS1;
echo \NS1;// 访问公共命名空间，使用这种方式更好
echo \shanghai\name2\NS1; // 完全限定访问方式


