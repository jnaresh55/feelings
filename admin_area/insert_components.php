<html>
<head></head>

<body>
<div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Insert New Component</h4>
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
              <form class="form" method="post" id="insert_component" action="" enctype="multipart/form-data">
                <div class="form-body">
                  <h4 class="form-section"><i class="ft-user"></i> Latest component</h4>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Component Title</label>
                        <input type="text" class="form-control" placeholder="Enter Component Title" name="component_title">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Component Price</label>
                        <input type="text" class="form-control" placeholder="Enter Component Price" name="component_price">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput3">Description</label>
                       <textarea rows="5" class="form-control" name="component_desc" placeholder="About Component"></textarea>
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <label>Select Component Image</label>
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" name="component_image">
                      <span class="file-custom"></span> </label>
                  </div>
                  
                  
                  
                </div>
                <div class="form-actions">
                  
                  <input type="submit" class="btn btn-primary" name="insert_component" value="Save"> 
                </div>
              </form>
            </div>
          </div>
        </div>
		</body>
		
		<?php

if(isset($_POST['insert_component'])){
	
	$component_title = $_POST['component_title'];
	$component_price = $_POST['component_price'];
	$component_desc = $_POST['component_desc'];
	
	
	$component_image = $_FILES['component_image']['name'];
	$temp_name = $_FILES['component_image']['tmp_name'];
	
	if($component_title=='' OR $component_image=='' OR $component_price=='' OR $component_desc=='' )
	{
	echo "<script>alert('Please Fill all the the fields!')</script>";
	exit();
	}
	else{
		move_uploaded_file($temp_name,"component_images/$component_image");
		
	$insert_components = "insert into component (component_title,component_price,component_image,component_desc)
	values('$component_title','$component_price','$component_image','$component_desc')";
	
	$run_component = mysqli_query($con, $insert_components);
	
	if($run_component){
		
		echo "<script>alert('Component inserted Successfully')</script>";
		
	}
	}
}

 ?>