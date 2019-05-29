<?php

    include 'connection.php';

    $taste = $_POST['taste'];
    $type = $_POST['type']; //입력한 제목과 내용을 각각의 변수에 대입
    $price = $_POST['price'];
    $name = $_POST['name'];
    //$regtime = time();

    $sql = "INSERT INTO Research(taste, type, price,name,regtime)";
    $sql .= "VALUES('{$taste}','{$type}','{$price}','{$name}',NOW())";

    $result = $dbConnect->query($sql);

    if($result){
        echo "저장 완료";
        echo "<a href='createData.html'>홈페이지로 이동</a>";
        exit;
    } else {
        echo "저장 실패 - 관리자에게 문의";
        echo "<a href='createData.html'>홈페이지로 이동</a>";
        exit;
    }
?>
