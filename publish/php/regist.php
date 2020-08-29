<?php 
    $username = $_POST["username"];
    $password = $_POST["password"];

    mysql_connect("localhost", "root", "root");

    mysql_select_db("huimai");

    $sql = "INSERT INTO userinfo (username, password) VALUES('$username', '$password')";

    mysql_query($sql);

    $count = mysql_affected_rows();

    if ($count == 1) {
        $arr = array("error" => 0, "msg" => "注册成功");
    } else {
        $arr = array("error" => 1, "msg" => "注册失败");
    }

    echo json_encode($arr);

?>