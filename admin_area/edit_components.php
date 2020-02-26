<?php 
if(isset($_GET['edit_components'])){
	$edit_id = $_GET['edit_components'];
	
	$get_edit = "select * from component where component_id='$edit_id'";
	
	$run_edit = mysqli_query($con, $get_edit);
	$row_edit = mysqli_fetch_array($run_edit);
	
	$update_id = $row_edit['component_id'];
	
	$component_title = $row_edit['component_title'];
	$component_image = $row_edit['component_image'];
	$component_price = $row_edit['component_price'];
	$p_desc  = $row_edit['component_desc'];
}
 ?>

<html>
<head></head>

<body>
<div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Edit component</h4>
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
                  
                  <h4 class="form-section"><i class="la la-paperclip"></i> component</h4>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">component Title</label>
                        <input type="text" class="form-control" name="component_title" value="<?php echo $component_title; ?>">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Project Price</label>
                        <input type="text" class="form-control" value="<?php echo $component_price; ?>" name="component_price">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput3">Description</label>
                       <input type="text" class="form-control" name="component_desc" value="<?php echo $p_desc; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Select File</label>
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" value="<?php echo $component_image; ?>" name="component_image"><img src="component_images/<?php echo $component_image; ?>" width="300" height="100">
                      <span class="file-custom"></span> </label>
                  </div>
                  
                </div>
                <div class="form-actions">
                  
                  <input type="submit" class="btn btn-primary" name="update_component" value="Save">
                </div>
              </form>
            </div>
          </div>
        </div>
		</body>
		
			
		<?php

if(isset($_POST['update_component'])){
	
	$component_title = $_POST['component_title'];
	$component_price = $_POST['component_price'];
	$component_image = $_FILES['component_image']['name'];
	$temp_name = $_FILES['component_image']['tmp_name'];
	$component_desc = $_POST['component_desc'];
	
	if($component_image=='' OR $component_title=='' OR $component_price=='' OR $p_desc==''  )
	{
	echo "<script>alert('Please insert all the component fields!')</script>";
	exit();
	}
	else{
		move_uploaded_file($temp_name,"component_images/$component_image");
		
	$update_components = "update component set component_title='$component_title',component_price='$component_price',component_image='$component_image',component_desc='$component_desc' where component_id='$update_id'";
	
	$run_update = mysqli_query($con, $update_components);
	
	if($run_update){
		
		echo "<script>alert('Component Updated Successfully')</script>";
		echo "<script>window.open('index.php?view_components','_self')</script>";
	}
	}
}

 ?>