<?php 
require_once('../../connection.php');
$id=$_POST['id'];
$title=$_POST['title_category'];
$des=$_POST['description'];
$query = "UPDATE categories set title_category='".$title."' , Description='".$des."' where id = ".$id."";
$status = $conn->query($query);
if($status == 1 ){
	setcookie('msg','Cập nhật thành công',time()+2);
	header('Location: categories.php');
}
else {
	setcookie('msg','Cập nhật không thành công',time()+2);
	header('Location: category_edit.php?id='.$id);
}
?>