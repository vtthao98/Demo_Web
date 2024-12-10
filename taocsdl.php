<?php
$servername = "localhost";
$username = "username";
$password = "password";
//Bắt lỗi try {
$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
// Thiết lập một chế độ lỗi PDO
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE myDBPDO";
// Sử dụng hàm exec() vì câu lệnh trên không có kết quả trả về
 $conn->exec($sql);
echo "Tạo cơ sở dữ liệu thành công!<br>";
}
catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
<!-- CREATE TABLE KhachHang (
SDT varchar(10) PRIMARY KEY, 
TenKH VARCHAR(50) NULL, 
MatKhau VARCHAR(30) NOT NULL,
Email VARCHAR(50) null,
DiaChi TIMESTAMP null,
TinhTrang boolean not null,
IDQuyen ) -->