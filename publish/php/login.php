<?php
    // 获取前端提交的数据
    $username = $_POST["username"];
    $password = $_POST["password"];

    // 链接数据库
    mysql_connect("localhost", "root", "root");

    // 选择数据库
    mysql_select_db("huimai");

    // 定义查询语句
    $sql = "SELECT * FROM userinfo WHERE username = '$username' and password = '$password'";

    // 执行SQL语句
    $result = mysql_query($sql);

    // 获取条数
    $count = mysql_num_rows($result);

    // 判定条件
    if ($count == 1) {
        $arr = array("error" => 0, "msg" => "登录成功");
    } else {
        $arr = array("error" => 1, "msg" => "用户名或密码输入有误，请重新输入");
    }

    // 返回数据
    echo json_encode($arr);

    // // 释放链接
    // mysql_close();
?>