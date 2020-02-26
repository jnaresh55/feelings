<html>
<head><link rel="stylesheet" type="text/css" href="table.css"></head>

<body>
<div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Home Slider</h4>
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
                        <label for="projectinput1">Slider Title</label>
                        <input type="text" class="form-control" placeholder="Enter Slider Title" name="slider_title">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Select File</label>
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" name="slider_image">
                      <span class="file-custom"></span> </label>
                  </div>
                  
                </div>
                <div class="form-actions">
                  
                  <input type="submit" class="btn btn-primary" name="insert_slider" value="Save"> 
                </div>
              </form>
            </div>
          </div>
        </div>
		
<div class="page">
 <h1>Home Slider</h1>
<table class="layout display responsive-table">
    <thead>
        <tr>
		     
            <th>Slider ID</th>
			<th>Image</th>
            <th>Slider Name</th>
			<th colspan="2">Action</th>
        </tr>
    </thead>
	<?php
include("includes/db.php");

$i=0;

$get_pro = "select * from slider";
$run_pro = mysqli_query($con, $get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
	
	$p_id = $row_pro['slider_id'];
	$p_title = $row_pro['slider_name'];
	$p_img = $row_pro['slider_image'];
	
	$i++;

 ?>

    <tbody>

        <tr>
            <td class="organisationnumber"><?php echo $i; ?></td>
			<td class="organisationnumber"><img src="slider_images/<?php echo $p_img; ?>" width="200" height="50"></td>
            <td class="organisationname"><?php echo $p_title; ?></td>
			
            <td class="actions">
                
                <a href="delete_slider.php?delete_slider=<?php echo $p_id; ?>" class="remove-item" title="Remove">Remove</a>
            </td>
        </tr>
		<?php } ?>

        
    </tbody>
</table>
</div>

		</body>
		
			
		<?php

if(isset($_POST['insert_slider'])){
	
	$slider_title = $_POST['slider_title'];
	$slider_image = $_FILES['slider_image']['name'];
	$temp_name = $_FILES['slider_image']['tmp_name'];
	
	if($slider_image=='' OR $slider_title==''  )
	{
	echo "<script>alert('Please select the the slider!')</script>";
	exit();
	}
	else{
		move_uploaded_file($temp_name,"slider_images/$slider_image");
		
	$insert_sliders = "insert into slider (slider_name,slider_image)
	values('$slider_title','$slider_image')";
	
	$run_slider = mysqli_query($con, $insert_sliders);
	
	if($run_slider){
		
		echo "<script>alert('Slider image inserted Successfully')</script>";
		
	}
	}
}

 ?>