<?php 
require_once('../../connection.php');
$query="SELECT * from posts";
$result=$conn->query($query);
$posts=array();
while($row=$result->fetch_assoc()){
  $posts[]=$row;
}$query_cate="SELECT * from categories";
$result_cate=$conn->query($query_cate);
$categories=array();
while($row=$result_cate->fetch_assoc()){
  $categories[]=$row;
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
    <h3 align="center">Add New Post</h3>
    <hr>
    	<?php if(isset($_COOKIE['msg'])){?>
    	<div class="alert alert-warning">
          <strong>Thất bại </strong><?=$_COOKIE['msg'] ?>
        </div>
    	<?php } ?>

        <form action="post_add_action.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">Contect</label>
                <textarea class="form-control" id="" placeholder="" name="content" rows="8"></textarea>

            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" class="form-control">
                <?php foreach ($categories as $cate) {?>  
                  <option value="<?= $cate['id'] ?>"><?= $cate['title_category'] ?></option>
                <?php } ?>
                </select>

            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Hiện thị bài viết</label>
                <input type="checkbox"  id="" placeholder="" name="status" value="1"><em>(Check để hiện thị bài viết)</em>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>