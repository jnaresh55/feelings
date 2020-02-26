<html>
<head></head>

<body>
<div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Insert New Projects</h4>
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
              <form class="form" method="post" id="insert_projects" action="" enctype="multipart/form-data">
                <div class="form-body">
                  <h4 class="form-section"><i class="ft-user"></i> Latest Projects</h4>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Project Title</label>
                        <input type="text" class="form-control" placeholder="Enter Project Title" name="projects_title">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Project Price</label>
                        <input type="text" class="form-control" placeholder="Enter Project Price" name="projects_price">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput3">Short Description</label>
                       <textarea rows="1" class="form-control" name="projects_desc" placeholder="About Project"></textarea>
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput3">Full Description</label>
                       <textarea rows="5" class="form-control" name="projects_desc1" placeholder="About Project"></textarea>
                      </div>
                    </div>
                  </div>
				  <label>Select Project Image</label>
                   <div class="form-group">
                    
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" name="projects_image">
                      <span class="file-custom"></span> </label>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput3">Project Components</label>
                       <input type="text" class="form-control" name="projects_comp1" placeholder="1 Component" />
					   <input type="text" class="form-control" name="projects_comp2" placeholder="2 Component" />
					   <input type="text" class="form-control" name="projects_comp3" placeholder="3 Component" />
					   <input type="text" class="form-control" name="projects_comp4" placeholder="4 Component" />
					   <input type="text" class="form-control" name="projects_comp5" placeholder="5 Component" />
                      </div>
                    </div>
                  </div>

                  
                  
                </div>
                <div class="form-actions">
                  
                  <input type="submit" class="btn btn-primary" name="insert_projects" value="Save">
                </div>
              </form>
            </div>
          </div>
        </div>
		</body>
		
		<?php

if(isset($_POST['insert_projects'])){
	
	$projects_title = $_POST['projects_title'];
	$projects_price = $_POST['projects_price'];
	$projects_desc = $_POST['projects_desc'];
	$projects_desc1 = $_POST['projects_desc1'];
	$projects_comp1 = $_POST['projects_comp1'];
	$projects_comp2 = $_POST['projects_comp2'];
	$projects_comp3 = $_POST['projects_comp3'];
	$projects_comp4 = $_POST['projects_comp4'];
	$projects_comp5 = $_POST['projects_comp5'];
	
	
	$projects_image = $_FILES['projects_image']['name'];
	$temp_name = $_FILES['projects_image']['tmp_name'];
	
	if($projects_title=='' OR $projects_image=='' OR $projects_price=='' OR $projects_desc=='' )
	{
	echo "<script>alert('Please Fill all the the fields!')</script>";
	exit();
	}
	else{
		move_uploaded_file($temp_name,"projects_images/$projects_image");
		
	$insert_project = "insert into project (projects_title,projects_price,projects_image,projects_desc,projects_desc1,projects_comp1,projects_comp2,projects_comp3,projects_comp4,projects_comp5)
	values('$projects_title','$projects_price','$projects_image','$projects_desc','$projects_desc1','$projects_comp1','$projects_comp2','$projects_comp3','$projects_comp4','$projects_comp5')";
	
	$run_projects = mysqli_query($con, $insert_project);
	
	if($run_projects){
		
		echo "<script>alert('Project inserted Successfully')</script>";
		
	}
	}
}

 ?>