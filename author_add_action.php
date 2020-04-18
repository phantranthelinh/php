<?php 
require_once('../../connection.php');
$name=$_POST['name'];
$email=$_POST['email'];
$query ="INSERT INTO authors_tg(name_tg,email_tg) values ('".$name."','".$email."')";
$status = $conn->query($query);
if($status == 1 ){
	setcookie('msg','Thêm mới thành công',time()+2);
	header('Location: authors.php');
}
else {
	setcookie('msg','Thêm mới không thành công',time()+2);
	header('Location: author_add.php');
}
?>