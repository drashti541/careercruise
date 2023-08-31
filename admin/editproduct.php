<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0) {
header('location:index.php'); }
else{
if(isset($_POST['upsubmit'])) {
$name=$_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$categories = $_POST['categories'];
$image = $_FILES["img_file"]["name"];
move_uploaded_file($_FILES["img_file"]["tmp_name"],"uploads/".$_FILES["img_file"]["name"]);
$pid=intval($_GET['pid']);
$sql="UPDATE products SET pname=:name,pdescription=:description,pprice=:price,pcategories=:categories,pimage=:image WHERE pid=:pid ";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->bindParam(':price',$price,PDO::PARAM_STR);
$query->bindParam(':categories',$categories,PDO::PARAM_STR);
$query->bindParam(':image',$image,PDO::PARAM_STR);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->execute();
$msg="Data updated successfully"; }
	?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Admin Dashboard</title>
    <link rel="shortcut icon" href="img/logo.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Edit Product</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
									<div class="panel-body">
                    <?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
                        <?php
                          $pid=intval($_GET['pid']);
                          $sql = "SELECT * from products WHERE pid='$pid'";
                          $query = $dbh -> prepare($sql);
                          $query->execute();
                          $results=$query->fetchAll(PDO::FETCH_OBJ);
                          $cnt=1;
                          if($query->rowCount() > 0)
                          {
                          foreach($results as $result)
                        {	?>
                                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Products Name : <span style="color:red">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="text" name="name" class="form-control" value="<?php echo htmlentities($result->pname)?>" required>
                                        </div>
                                        <label class="col-sm-2 control-label">Products Price : <span style="color:red">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="number" name="price" class="form-control" value="<?php echo htmlentities($result->pprice)?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Categories  : </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="categories" class="form-control" value="<?php echo htmlentities($result->pcategories)?>">
                                        </div>
                                        <label class="col-sm-2 control-label">Description : </label>
                                        <div class="col-sm-4">
                                            <textarea type="text" name="description" class="form-control"><?php echo htmlentities($result->pdescription)?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Image<span style="color:red">*</span></label>
                                            <div class="col-sm-4">
                                              Uploaded Image
                                                    <br>
                                            		<?php if($result->pimage=="")
                                            			{
                                            			echo htmlentities("File not available");
                                            			} else {?>
                                            		  <img src="uploads/<?php echo htmlentities($result->pimage);?>" width="300" height="200" style="border:solid 1px #000">
                                                    <br>
                                            		<?php } ?>
                                            	</div>
                                              <input type="file" name="image" accept="image/png, image/jpeg">
                                            </div>                                                        
                                <?php }} ?>
											        <div class="form-group">
                             <div style="padding-top: 30px; padding-left:30px;">
											    <button class="btn btn-primary" name="upsubmit" type="submit">Update</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php } ?>