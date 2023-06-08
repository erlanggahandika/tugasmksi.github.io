<?php

session_start();

include 'koneksi.php';

//filter komment
$userid = Trim(htmlentities($_POST['userid']));
$comment = Trim(htmlentities($_POST['comment']));
// end

//yang tidak difilter
// $userid = $_POST['userid'];
// $comment = $_POST['comment'];
//end

$insert = mysqli_query($conn, "INSERT INTO guestbook (id, tanggal, userid, comment) VALUES(NULL, NOW(), '{$userid}', '{$comment}')");

if ($insert) {
	header("location:dashboard.php");
}


