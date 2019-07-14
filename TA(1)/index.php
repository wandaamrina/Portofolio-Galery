<?php 
include('header.php');
?>
<body>
<br><br>
<div class="container">
    <div class="row-fluid">
    <div class="span12">

        <h1>GALLERY PHOTOGRAPHY</h1>

        <br>

        <li class="nav-item">
            <a class="nav-link" href="index.php">Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="upload.php">Upload</a>
        </li>
		<br><br>					
	</div>
    <div class="span12">
	
	 <ul class="thumbnails">
	 
	 <?php 
	 $query=mysql_query("select * from image")or die(mysql_error());
	 while($row=mysql_fetch_array($query)){
	 ?>
	 
    <li class="span2">
    <div class="thumbnail">
    <img src="<?php echo $row['location']; ?>" width="100" height="100" alt="" class="img-rounded">

    </div>
    </li>
	<?php 
	}
	?>
	
    </ul>
	
	</div>
    </div>
							
	<?php
    if (isset($_POST['submit'])) {
                           
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

    move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
    $location = "upload/" . $_FILES["image"]["name"];

    mysql_query("insert into image (location) values ('$location')") or die(mysql_error());
    header('location:index.php');
    }
    ?>
</div>
</body>
</html>