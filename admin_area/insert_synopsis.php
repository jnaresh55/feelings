<html>
<head><link rel="stylesheet" type="text/css" href="table.css"></head>

<body>
<div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Insert New Synopsis</h4>
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
                        <label for="projectinput1">Synopsis Title</label>
                        <input type="text" class="form-control" placeholder="Enter Synopsis Title" name="synopsis_title">
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Select File</label>
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" name="synopsis_file">
                      <span class="file-custom"></span> </label>
                  </div>
                  
                </div>
                <div class="form-actions">
                  
                  <input type="submit" class="btn btn-primary" name="insert_synopsis" value="Save">
                </div>
              </form>
            </div>
          </div>
        </div>
		<div class="page">
 <h1>Synopsis</h1>
<table class="layout display responsive-table">
    <thead>
        <tr>
		     
            <th>Synopsis ID</th>
            <th>synopsis Title</th>
			<th>File</th>
			<th colspan="2">Action</th>
        </tr>
    </thead>
	<?php
include("includes/db.php");

$i=0;

$get_pro = "select * from synopsis";
$run_pro = mysqli_query($con, $get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
	
	$p_id = $row_pro['synopsis_id'];
	$p_title = $row_pro['synopsis_title'];
	$p_img = $row_pro['synopsis_file'];
	
	$i++;

 ?>

    <tbody>

        <tr>
            <td class="organisationnumber"><?php echo $i; ?></td>
            <td class="organisationname"><?php echo $p_title; ?></td>
			<td class="organisationnumber"><img src="synopsis_files/<?php echo $p_img; ?>"></td>
			
            <td class="actions">
                <a href="index.php?edit_synopsis=<?php echo $p_id; ?>" class="edit-item" title="Edit">Edit</a>
                </td><td><a href="delete_synopsis.php?delete_synopsis=<?php echo $p_id; ?>" class="remove-item" title="Remove">Remove</a>
            </td>
        </tr>
		<?php } ?>

        
    </tbody>
</table>
</div>

		</body>
		
			
		<?php

if(isset($_POST['insert_synopsis'])){
	
	$synopsis_title = $_POST['synopsis_title'];
	$synopsis_file = $_FILES['synopsis_file']['name'];
	$temp_name = $_FILES['synopsis_file']['tmp_name'];
	
	if($synopsis_file=='' OR $synopsis_title==''  )
	{
	echo "<script>alert('Please select the the synopsis!')</script>";
	exit();
	}
	else{
		move_uploaded_file($temp_name,"synopsis_files/$synopsis_file");
		
	$insert_synopsiss = "insert into synopsis (synopsis_title,synopsis_file)
	values('$synopsis_title','$synopsis_file')";
	
	$run_synopsis = mysqli_query($con, $insert_synopsiss);
	
	if($run_synopsis){
		
		echo "<script>alert('Synopsis inserted Successfully')</script>";
		
	}
	}
}

 ?>