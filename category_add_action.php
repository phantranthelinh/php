<?php 
require_once('../../connection.php');
$title_category=$_POST['title_category'];
$des=$_POST['description'];
$query = "INSERT INTO categories(title_category,description) values ('".$title_category."','".$des."')";
$status = $conn->query($query);
if($status == 1 ){
	setcookie('msg','Thêm mới thành công',time()+2);
	header('Location: categories.php');
}
else {
	setcookie('msg','Thêm mới không thành công',time()+2);
	header('Location: category_add.php');
}
?>