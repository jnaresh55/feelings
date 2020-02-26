<?php 
if(isset($_GET['edit_projects'])){
	$edit_id = $_GET['edit_projects'];
	
	$get_edit = "select * from project where projects_id='$edit_id'";
	
	$run_edit = mysqli_query($con, $get_edit);
	$row_edit = mysqli_fetch_array($run_edit);
	
	$update_id = $row_edit['projects_id'];
	
	$projects_title = $row_edit['projects_title'];
	$projects_image = $row_edit['projects_image'];
	$projects_price = $row_edit['projects_price'];
	$p_desc  = $row_edit['projects_desc'];
}
 ?>

<html>
<head></head>

<body>
<div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Edit Projects</h4>
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
                  
                  <h4 class="form-section"><i class="la la-paperclip"></i> Projects</h4>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">projects Title</label>
                        <input type="text" class="form-control" name="projects_title" value="<?php echo $projects_title; ?>">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Project Price</label>
                        <input type="text" class="form-control" value="<?php echo $projects_price; ?>" name="projects_price">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput3">Description</label>
                       <input type="text" class="form-control" name="projects_desc" value="<?php echo $p_desc; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Select File</label>
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" value="<?php echo $projects_image; ?>" name="projects_image"><img src="projects_images/<?php echo $projects_image; ?>" width="300" height="100">
                      <span class="file-custom"></span> </label>
                  </div>
                  
                </div>
                <div class="form-actions">
                  
                  <input type="submit" class="btn btn-primary" name="update_projects" value="Save">
                </div>
              </form>
            </div>
          </div>
        </div>
		</body>
		
			
		<?php

if(isset($_POST['update_projects'])){
	
	$projects_title = $_POST['projects_title'];
	$projects_price = $_POST['projects_price'];
	$projects_image = $_FILES['projects_image']['name'];
	$temp_name = $_FILES['projects_image']['tmp_name'];
	$projects_desc = $_POST['projects_desc'];
	
	if($projects_image=='' OR $projects_title=='' OR $projects_price=='' OR $p_desc==''  )
	{
	echo "<script>alert('Please insert all the projects fields!')</script>";
	exit();
	}
	else{
		move_uploaded_file($temp_name,"projects_images/$projects_image");
		
	$update_projectss = "update project set projects_title='$projects_title',projects_price='$projects_price',projects_image='$projects_image',projects_desc='$projects_desc' where projects_id='$update_id'";
	
	$run_update = mysqli_query($con, $update_projectss);
	
	if($run_update){
		
		echo "<script>alert('project Updated Successfully')</script>";
		echo "<script>window.open('index.php?view_projects','_self')</script>";
	}
	}
}

 ?>