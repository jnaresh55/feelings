<html>
<head><link rel="stylesheet" type="text/css" href="table.css"></head>

<body>
<div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Home homeimage</h4>
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
                        <label for="projectinput1">homeimage Title</label>
                        <input type="text" class="form-control" placeholder="Enter homeimage Title" name="homeimage_title">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">homeimage Sub-Title</label>
                        <input type="text" class="form-control" placeholder="Enter homeimage Title" name="homeimage_subtitle">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">homeimage Desc</label>
                        <input type="text" class="form-control" placeholder="Enter homeimage Title" name="homeimage_desc">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Select File</label>
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" name="homeimage_fimage">
                      <span class="file-custom"></span> </label>
                  </div>
                  
                </div>
                <div class="form-actions">
                  
                  <input type="submit" class="btn btn-primary" name="insert_homeimage" value="Save"> 
                </div>
              </form>
            </div>
          </div>
        </div>
		
<div class="page">
 <h1>Home homeimage</h1>
<table class="layout display responsive-table">
    <thead>
        <tr>
		     
            <th>Sr No</th>
			<th>Image</th>
            <th>Title</th>
			<th>Sub Title</th>
			<th>Desc</th>
			<th colspan="2">Action</th>
        </tr>
    </thead>
	<?php
include("includes/db.php");

$i=0;

$get_pro = "select * from homeimage";
$run_pro = mysqli_query($con, $get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
	
	$p_id = $row_pro['homeimage_id'];
	$p_title = $row_pro['homeimage_title'];
	$p_subtitle = $row_pro['homeimage_subtitle'];
	$p_desc = $row_pro['homeimage_desc'];
	$p_img = $row_pro['homeimage_fimage'];
	
	$i++;

 ?>

    <tbody>

        <tr>
            <td class="organisationnumber"><?php echo $i; ?></td>
			<td class="organisationnumber"><img src="homeimage_images/<?php echo $p_img; ?>" width="60" height="60"></td>
            <td class="organisationname"><?php echo $p_title; ?></td>
			<td class="organisationname"><?php echo $p_subtitle; ?></td>
			<td class="organisationname"><?php echo $p_desc; ?></td>
			
			
            <td class="actions">
                
                <a href="delete_homeimage.php?delete_homeimage=<?php echo $p_id; ?>" class="remove-item" title="Remove">Remove</a>
            </td>
        </tr>
		<?php } ?>

        
    </tbody>
</table>
</div>

		</body>
		
			
		<?php

if(isset($_POST['insert_homeimage'])){
	
	$homeimage_title = $_POST['homeimage_title'];
	$homeimage_subtitle = $_POST['homeimage_subtitle'];
	$homeimage_desc = $_POST['homeimage_desc'];
	$homeimage_fimage = $_FILES['homeimage_fimage']['name'];
	$temp_name = $_FILES['homeimage_fimage']['tmp_name'];
	
	
	if($homeimage_fimage=='' OR $homeimage_title==''  )
	{
	echo "<script>alert('Please select the homeimage!')</script>";
	exit();
	}
	else{
		move_uploaded_file($temp_name,"homeimage_images/$homeimage_fimage");
		
	$insert_homeimages = "insert into homeimage (homeimage_title,homeimage_subtitle,homeimage_desc,homeimage_fimage)
	values('$homeimage_title','$homeimage_subtitle','$homeimage_desc','$homeimage_fimage')";
	
	$run_homeimage = mysqli_query($con, $insert_homeimages);
	
	if($run_homeimage){
		
		echo "<script>alert('home image inserted Successfully')</script>";
		
	}
	}
}

 ?>