<html>
<head><link rel="stylesheet" type="text/css" href="table.css"></head>

<body>
<div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Gallery Images</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <form class="form" method="post"  action="" enctype="multipart/form-data">
                <div class="form-body">
                  
                  
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Gallery Title</label>
                        <input type="text" class="form-control" placeholder="Enter gallery Title" name="gallery_title">
                      </div>
                    </div>
                  </div>
				  <div class="col-md-12">
				  <label>Select Front Image</label>
                  <div class="form-group">
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" name="gallery_image">
                      <span class="file-custom"></span> </label>
                  </div></div>
				  <div class="col-md-12">
				  <label>Select Zoom Image</label>
				  <div class="form-group">
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" name="gallery_zoom_image">
                      <span class="file-custom"></span> </label>
                  </div></div>
                  
                </div>
                <div class="form-actions">
                  
                  <input type="submit" class="btn btn-primary" name="insert_gallery" value="Save"> 
                </div>
              </form>
            </div>
          </div>
        </div>
		
<div class="page">
 <h1>Gallery Images</h1>
<table class="layout display responsive-table">
    <thead>
        <tr>
		     
            <th>gallery ID</th>
			<th>Image</th>
            <th>Image Name</th>
			<th colspan="2">Action</th>
        </tr>
    </thead>
	<?php
include("includes/db.php");

$i=0;

$get_pro = "select * from gallery";
$run_pro = mysqli_query($con, $get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
	
	$p_id = $row_pro['gallery_id'];
	$p_title = $row_pro['gallery_title'];
	$p_img = $row_pro['gallery_image'];
	
	$i++;

 ?>

    <tbody>

        <tr>
            <td class="organisationnumber"><?php echo $i; ?></td>
			<td class="organisationnumber"><img src="gallery_images/<?php echo $p_img; ?>" width="60" height="60"></td>
            <td class="organisationname"><?php echo $p_title; ?></td>
			
            <td class="actions">
                
                <a href="delete_gallery.php?delete_gallery=<?php echo $p_id; ?>" class="remove-item" title="Remove">Remove</a>
            </td>
        </tr>
		<?php } ?>

        
    </tbody>
</table>
</div>

		</body>
		
			
		<?php

if(isset($_POST['insert_gallery'])){
	
	$gallery_title = $_POST['gallery_title'];
	$gallery_image = $_FILES['gallery_image']['name'];
	$temp_name = $_FILES['gallery_image']['tmp_name'];
	$gallery_zoom_image = $_FILES['gallery_zoom_image']['name'];
	$temp_name = $_FILES['gallery_zoom_image']['tmp_name'];
	
	if($gallery_image=='' OR $gallery_title==''  )
	{
	echo "<script>alert('Please select the the gallery Image!')</script>";
	exit();
	}
	else{
		move_uploaded_file($temp_name,"gallery_images/$gallery_image");
		
	$insert_gallerys = "insert into gallery (gallery_title,gallery_image,gallery_zoom_image)
	values('$gallery_title','$gallery_image','$gallery_zoom_image')";
	
	$run_gallery = mysqli_query($con, $insert_gallerys);
	
	if($run_gallery){
		
		echo "<script>alert('gallery image inserted Successfully')</script>";
		
	}
	}
}

 ?>