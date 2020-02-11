<?php
//配置文件
return [

    'view_replace_str'       => [
        '__PUBLIC__'=>'http://127.0.0.1/tp5/public/static/index',
//        '__PUBLIC__'=>'http://www.atobe.com/static/index',
    ],
    'paginate'               => [
        /* 'type'      => 'bootstrap',*/
        'type'      => 'layui\Layui',
        'var_page'  => 'page',
        'list_rows' => 15,
    ],
    'url_route_on'           => true,
];
//'template'               => [
//    'view_suffix'  => 'html',
//],
//'url_html_suffix'        => 'html',