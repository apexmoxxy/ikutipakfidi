<?php
    include("./classes/Student.php");
    $data = $_POST;

    $mhs = new Student($data['txtNIM'],$data['txtNama'],$data['txtProdi'],$data['txtHP'],$data['txtEmail']);

    $mhs->insertMhs();
?>