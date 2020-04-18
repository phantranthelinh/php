<?php 
require_once('../../connection.php');
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$query = "UPDATE authors_tg set name_tg='".$name."' , email_tg='".$email."' where id = ".$id."";
$status = $conn->query($query);
if($status == 1 ){
	setcookie('msg','Cập nhật thành công',time()+2);
	header('Location: authors.php');
}
else {
	setcookie('msg','Cập nhật không thành công',time()+2);
	header('Location: author_edit.php?id='.$id);
}
?>