<?php
    // 接收前端提交的数据
    $username = $_GET["username"];

    // 连接数据库
    mysql_connect("localhost", "root", "root");

    // 选择数据库
    mysql_select_db("huimai");

    // 定义查询语句
    $mysql = "SELECT * FROM userinfo WHERE username='$username'";

    // 执行SQL语句
    $result = mysql_query($mysql);

    // 获取查询到的数据的数量
    $count = mysql_num_rows($result);

    // 判定count数值
    if ($count) {
        $arr = array("error" => 1, "msg" => "用户名已存在，请更换后重试");
    }   else {
        $arr = array("error" => 0, "msg" => "用户名可以使用");
    }

    echo json_encode($arr);

    // // 释放链接
    // mysql_close();
?>