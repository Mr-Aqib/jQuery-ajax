<?php
$connection = mysqli_connect("localhost", "root", "", "ajax");
$name = $_POST['name'];
$email = $_POST['email'];
$rollno = $_POST['rollno'];
$gender = $_POST['gender'];
$insert = "INSERT into add_data (Name,Rollno,Email,Gender) VALUE('{$name}',$rollno,'{$email}','{$gender}')";
mysqli_query($connection, $insert);
