<?php 
require_once('../../connection.php');
$query="SELECT * from authors_tg";
$result=$conn->query($query);
$authors=array();
while($row=$result->fetch_assoc()){
  $authors[]=$row;
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Zent - Education And Technology Group</h3>
    <h3 align="center">Author List</h3>
    <a href="author_add.php" type="button" class="btn btn-primary">Thêm mới</a>
    <?php if(isset($_COOKIE['msg'])){?>
        <div class="alert alert-success">
          <strong>Thông báo</strong> <?=$_COOKIE['msg'] ?> !!!
        </div>
    <?php } ?>
    <hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Choose an action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
         foreach ($authors as $au) {
        ?>
        <tr>
          <th scope="row"><?=$au['id']?></th>
          <td><?=$au['name_tg']?></td>
          <td><?=$au['email_tg']?></td>
          <td>
            <a href="author_view.php?id=<?=$au['id']?>" type="button" class="btn btn-default">Xem</a>
            <a href="author_edit.php?id=<?=$au['id']?>" type="button" class="btn btn-success">Sửa</a>
            <a href="author_delete.php?id=<?=$au['id']?>" type="button" class="btn btn-warning">Xóa</a>
          </td>
        </tr>
        <?php
      } ?>
      </tbody>
    </table>
    </div>
</body>
</html>