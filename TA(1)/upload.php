<?php 
include('header.php');
?>
<body>
<br><br>
<div class="container">
    <div class="row-fluid">
    <div class="span12">

    	<h1>GALLERY PHOTOGRAPHY</h1>

    	<br><br>

        <li class="nav-item">
            <a class="nav-link" href="index.php">Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="upload.php">Upload</a>
        </li>

    	<form class="form-horizontal" method="POST" enctype="multipart/form-data">                    
                            
            <div class="control-group">
                <label class="control-label" for="input01">Image:</label>
                <div class="controls">
                    <input type="file" name="image" class="font" required> 
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" name="submit" class="btn btn-success">Upload</button>
                </div>
            </div>
    </form>
							
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