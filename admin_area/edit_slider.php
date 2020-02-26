<?php 
if(isset($_GET['edit_slider'])){
	$edit_id = $_GET['edit_slider'];
	
	$get_edit = "select * from slider where slider_id='$edit_id'";
	
	$run_edit = mysqli_query($con, $get_edit);
	$row_edit = mysqli_fetch_array($run_edit);
	
	$update_id = $row_edit['slider_id'];
	
	$slider_title = $row_edit['slider_name'];
	$slider_image = $row_edit['slider_image'];
}
 ?>

<html>
<head></head>

<body>
<div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Edit Main Slider</h4>
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
                  
                  <h4 class="form-section"><i class="la la-paperclip"></i> Main Slider</h4>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Slider Title</label>
                        <input type="text" class="form-control" name="slider_title" value="<?php echo $slider_title; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Select File</label>
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" value="<?php echo $slider_image; ?>" name="slider_image"><img src="slider_images/<?php echo $slider_image; ?>" width="300" height="60">
                      <span class="file-custom"></span> </label>
                  </div>
                  
                </div>
                <div class="form-actions">
                  
                  <input type="submit" class="btn btn-primary" name="update_slider"> <i class="la la-check-square-o"></i> Save </button>
                </div>
              </form>
            </div>
          </div>
        </div>
		</body>
		
			
		<?php

if(isset($_POST['update_slider'])){
	
	$slider_title = $_POST['slider_title'];
	$slider_image = $_FILES['slider_image']['name'];
	$temp_name = $_FILES['slider_image']['tmp_name'];
	
	if($slider_image=='' OR $slider_name==''  )
	{
	echo "<script>alert('Please select the the slider!')</script>";
	exit();
	}
	else{
		move_uploaded_file($temp_name,"slider_images/$slider_image");
		
	$update_sliders = "update slider set slider_name='$slider_title',slider_image='$slider_image' where slider_id='$update_id'";
	
	$run_update = mysqli_query($con, $update_sliders);
	
	if($run_update){
		
		echo "<script>alert('Slider image Updated Successfully')</script>";
		echo "<script>window.open('index.php?view_slider','_self')</script>";
	}
	}
}

 ?>