<?php
    include "ketnoi.php";
    $SDT = $_GET["SDT"];
    $TenSP = $_GET["TenSP"];
    $sql = "INSERT INTO YKien(SDT, TenSP, NoiDung, NgayGhi)
    VALUES ('$SDT', '$TenSP', CURDATE())"
?>