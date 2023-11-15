<?php
$koneksi = mysqli_connect("localhost","root","","question");

$nama = $_POST ['nama'];
$email = $_POST ['email'];
$subject = $_POST ['subject'];
$message = $_POST ['message'];
$sendmessage = $_POST ['sendmassage'];

$query = "INSERT INTO question VALUES('$nama','$email','$subject','$message','$sendmessage'
mysqli_query($koneksi, $query);

?>