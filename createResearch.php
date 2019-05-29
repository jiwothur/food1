<?php
    include 'connection.php';
    $sql = "CREATE TABLE Research (";
    $sql .= "ID int(11) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "taste varchar(30) NOT NULL,";
    $sql .= "type varchar(30) NOT NULL,";
    $sql .= "price varchar(30) NOT NULL,";
    $sql .= "name varchar(30) NOT NULL,";
    $sql .= "regtime DATETIME NOT NULL,";
    $sql .= "PRIMARY KEY (ID)";
    $sql .= ") CHARSET=utf8";
    $result = $dbConnect->query($sql);
    if ($result) {
        echo "Research 테이블 생성 완료";
    } else {
        echo "Research 테이블 생성 실패";
    }
?>
