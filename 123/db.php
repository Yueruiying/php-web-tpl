<?php

// 启动 session
session_start();

$db_link;

function conn() {

    $env = 'db_online'; // db_offline
    
    $host = '127.0.0.1';
    $port = 3306;
    $user = 'root';
    $password = '';
    $database = 'test';
    
    if ( $env === 'db_online' ) {
        $host = 'nizhuantech.com';
        $port = 65321;
        $user = 'root';
        $password = 'FNQ31287twv';
        $database = 'test';
    }
    
    $db_link = mysqli_connect($host, $user, $password, $database, $port);

    if (mysqli_connect_errno()) {
        $error = mysqli_connect_error();
        $errno = mysqli_connect_errno();
        printf("连接失败 =>  $errno : $error \n");
        exit();
    }
}

function query($sql) {
    global $link;
    $result = mysqli_query($link, $sql);
    $arr = [];
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $arr[] = $row;
    }
    mysqli_free_result($result);
    return $arr;
}

function insert($sql) {
    global $link;
    $result = mysqli_query($link, $sql);
    mysqli_free_result($result);
    return mysqli_insert_id();
}

function close_conn() {
    global $link;
    @mysqli_close($link);
}

// 脚本结束的时候 关闭mysql
register_shutdown_function('close_conn');