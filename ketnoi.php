<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Quan_Ly_Web";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "Kết nối CSDL thất bại: " . $e->getMessage();
    }
?>
<!-- CREATE TABLE KhachHang (
SDT varchar(10) PRIMARY KEY, 
TenKH VARCHAR(50) NULL, 
MatKhau VARCHAR(30) NOT NULL,
Email VARCHAR(50) null,
DiaChi TIMESTAMP null,
TinhTrang boolean not null,
IDQuyen ) -->