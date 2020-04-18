<?php 
require_once('../../connection.php');
$id=$_GET['id'];
$query = "DELETE from authors_tg where id = ".$id."";
$status = $conn->query($query);
if($status == 1 ){
    setcookie('msg','Xóa thành công',time()+2);
}
else {
    setcookie('msg','Xóa không thành công',time()+2);
}
 header('Location: authors.php');
?>