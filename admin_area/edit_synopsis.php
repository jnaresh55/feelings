<?php 
if(isset($_GET['edit_synopsis'])){
	$edit_id = $_GET['edit_synopsis'];
	
	$get_edit = "select * from synopsis where synopsis_id='$edit_id'";
	
	$run_edit = mysqli_query($con, $get_edit);
	$row_edit = mysqli_fetch_array($run_edit);
	
	$update_id = $row_edit['synopsis_id'];
	
	$synopsis_title = $row_edit['synopsis_title'];
	$synopsis_file = $row_edit['synopsis_file'];
}
 ?>

<html>
<head></head>

<body>
<div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Edit synopsis</h4>
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
                  
                  <h4 class="form-section"><i class="la la-paperclip"></i> Main synopsis</h4>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">synopsis Title</label>
                        <input type="text" class="form-control" name="synopsis_title" value="<?php echo $synopsis_title; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Select File</label>
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" value="<?php echo $synopsis_file; ?>" name="synopsis_file"><img src="synopsis_files/<?php echo $synopsis_file; ?>" width="60" height="60">
                      <span class="file-custom"></span> </label>
                  </div>
                  
                </div>
                <div class="form-actions">
                  
                  <input type="submit" class="btn btn-primary" name="update_synopsis"> <i class="la la-check-square-o"></i> Save </button>
                </div>
              </form>
            </div>
          </div>
        </div>
		</body>
		
			
		<?php

if(isset($_POST['update_synopsis'])){
	
	$synopsis_title = $_POST['synopsis_title'];
	$synopsis_file = $_FILES['synopsis_file']['name'];
	$temp_name = $_FILES['synopsis_file']['tmp_name'];
	
	if($synopsis_file=='' OR $synopsis_title==''  )
	{
	echo "<script>alert('Please select the the synopsis!')</script>";
	exit();
	}
	else{
		move_uploaded_file($temp_name,"synopsis_images/$synopsis_image");
		
	$update_synopsiss = "update synopsis set synopsis_title='$synopsis_title',synopsis_file='$synopsis_file' where synopsis_id='$update_id'";
	
	$run_update = mysqli_query($con, $update_synopsiss);
	
	if($run_update){
		
		echo "<script>alert('synopsis Updated Successfully')</script>";
		echo "<script>window.open('index.php?view_synopsis','_self')</script>";
	}
	}
}

 ?>