<?php 
if(isset($_GET['edit_products'])){
	$edit_id = $_GET['edit_products'];
	
	$get_edit = "select * from product where product_id='$edit_id'";
	
	$run_edit = mysqli_query($con, $get_edit);
	$row_edit = mysqli_fetch_array($run_edit);
	
	$update_id = $row_edit['product_id'];
	
	$product_title = $row_edit['product_title'];
	$product_price = $row_edit['product_price'];
	$product_desc = $row_edit['product_desc'];
	$product_image = $row_edit['product_image'];
	$product_details1 = $row_edit['product_details1'];
	$product_details2 = $row_edit['product_details2'];
	$product_details3 = $row_edit['product_details3'];
	$product_details4 = $row_edit['product_details4'];
	$product_details5 = $row_edit['product_details5'];
	$product_details6 = $row_edit['product_details6'];
	$product_details_image = $row_edit['product_details_image'];
	$product_package1 = $row_edit['product_package1'];
	$product_package2 = $row_edit['product_package2'];
	$product_package3 = $row_edit['product_package3'];
	$product_package4 = $row_edit['product_package4'];
	$product_package5 = $row_edit['product_package5'];
	$product_package6 = $row_edit['product_package6'];
	$product_advantage1 = $row_edit['product_advantage1'];
	$product_advantage2 = $row_edit['product_advantage2'];
	$product_advantage3 = $row_edit['product_advantage3'];
	$product_advantage4 = $row_edit['product_advantage4'];
	$product_advantage5 = $row_edit['product_advantage5'];
	$product_advantage6 = $row_edit['product_advantage6'];
	$product_standard1 = $row_edit['product_standard1'];
	$product_standard2 = $row_edit['product_standard2'];
	$product_standard3 = $row_edit['product_standard3'];
	$product_standard4 = $row_edit['product_standard4'];
	$product_standard5 = $row_edit['product_standard5'];
	$product_standard6 = $row_edit['product_standard6'];
	
}
 ?>

<html>
<head></head>

<body>
<div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Edit product</h4>
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
                  
                  <h4 class="form-section"><i class="la la-paperclip"></i> Product</h4>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">product Title</label>
                        <input type="text" class="form-control" name="product_title" value="<?php echo $product_title; ?>">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Project Price</label>
                        <input type="text" class="form-control" value="<?php echo $product_price; ?>" name="product_price">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput3">Description</label>
                       <input type="text" class="form-control" name="product_desc" value="<?php echo $product_desc; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Select File</label>
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" value="<?php echo $product_image; ?>" name="product_image"><img src="product_images/<?php echo $product_image; ?>" width="100" height="100">
                      <span class="file-custom"></span> </label>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Product Details</label>
                        <input type="text" class="form-control" placeholder="Enter Product Details" value="<?php echo $product_details1; ?>" name="product_details1">
						<input type="text" class="form-control" placeholder="Enter Product Details" value="<?php echo $product_details2; ?>" name="product_details2">
						<input type="text" class="form-control" placeholder="Enter Product Details" value="<?php echo $product_details3; ?>" name="product_details3">
						<input type="text" class="form-control" placeholder="Enter Product Details" value="<?php echo $product_details4; ?>" name="product_details4">
						<input type="text" class="form-control" placeholder="Enter Product Details" value="<?php echo $product_details5; ?>" name="product_details5">
						<input type="text" class="form-control" placeholder="Enter Product Details" value="<?php echo $product_details6; ?>" name="product_details6">
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label>Select Product Details Image</label>
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" name="product_details_image" value="<?php echo $product_details_image; ?>"><img src="product_images/<?php echo $product_details_image; ?>" width="100" height="100">
                      <span class="file-custom"></span> </label>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Product Included Packages</label>
                        <input type="text" class="form-control" placeholder="Enter Product included Packages" value="<?php echo $product_package1; ?>" name="product_package1">
						<input type="text" class="form-control" placeholder="Enter Product included Packages" value="<?php echo $product_package2; ?>" name="product_package2">
						<input type="text" class="form-control" placeholder="Enter Product included Packages" value="<?php echo $product_package3; ?>" name="product_package3">
						<input type="text" class="form-control" placeholder="Enter Product included Packages" value="<?php echo $product_package4; ?>" name="product_package4">
						<input type="text" class="form-control" placeholder="Enter Product included Packages" value="<?php echo $product_package5; ?>" name="product_package5">
						<input type="text" class="form-control" placeholder="Enter Product included Packages" value="<?php echo $product_package6; ?>" name="product_package6">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Product Advantages</label>
                        <input type="text" class="form-control" placeholder="Enter Product Advantages" value="<?php echo $product_advantage1; ?>" name="product_advantage1">
						<input type="text" class="form-control" placeholder="Enter Product Advantages" value="<?php echo $product_advantage2; ?>" name="product_advantage2">
						<input type="text" class="form-control" placeholder="Enter Product Advantages" value="<?php echo $product_advantage3; ?>" name="product_advantage3">
						<input type="text" class="form-control" placeholder="Enter Product Advantages" value="<?php echo $product_advantage4; ?>" name="product_advantage4">
						<input type="text" class="form-control" placeholder="Enter Product Advantages" value="<?php echo $product_advantage5; ?>" name="product_advantage5">
						<input type="text" class="form-control" placeholder="Enter Product Advantages" value="<?php echo $product_advantage6; ?>" name="product_advantage6">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Product Quality Control Standards</label>
                        <input type="text" class="form-control" placeholder="Enter Product Quality Control Standards" value="<?php echo $product_standard1; ?>" name="product_standard1">
						<input type="text" class="form-control" placeholder="Enter Product Quality Control Standards" value="<?php echo $product_standard2; ?>" name="product_standard2">
						<input type="text" class="form-control" placeholder="Enter Product Quality Control Standards" value="<?php echo $product_standard3; ?>" name="product_standard3">
						<input type="text" class="form-control" placeholder="Enter Product Quality Control Standards" value="<?php echo $product_standard4; ?>" name="product_standard4">
						<input type="text" class="form-control" placeholder="Enter Product Quality Control Standards" value="<?php echo $product_standard5; ?>" name="product_standard5">
						<input type="text" class="form-control" placeholder="Enter Product Quality Control Standards" value="<?php echo $product_standard6; ?>" name="product_standard6">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-actions">
                  
                  <input type="submit" class="btn btn-primary" name="update_product" value="Save">
                </div>
              </form>
            </div>
          </div>
        </div>
		</body>
		
			
		<?php

if(isset($_POST['update_product'])){
	
	$product_title = $_POST['product_title'];
	$product_price = $_POST['product_price'];
	$product_desc = $_POST['product_desc'];
	$product_image = $_POST['product_image'];
	$product_details1 = $_POST['product_details1'];
	$product_details2 = $_POST['product_details2'];
	$product_details3 = $_POST['product_details3'];
	$product_details4 = $_POST['product_details4'];
	$product_details5 = $_POST['product_details5'];
	$product_details6 = $_POST['product_details6'];
	$product_details_image = $_POST['product_details_image'];
	$product_package1 = $_POST['product_package1'];
	$product_package2 = $_POST['product_package2'];
	$product_package3 = $_POST['product_package3'];
	$product_package4 = $_POST['product_package4'];
	$product_package5 = $_POST['product_package5'];
	$product_package6 = $_POST['product_package6'];
	$product_advantage1 = $_POST['product_advantage1'];
	$product_advantage2 = $_POST['product_advantage2'];
	$product_advantage3 = $_POST['product_advantage3'];
	$product_advantage4 = $_POST['product_advantage4'];
	$product_advantage5 = $_POST['product_advantage5'];
	$product_advantage6 = $_POST['product_advantage6'];
	$product_standard1 = $_POST['product_standard1'];
	$product_standard2 = $_POST['product_standard2'];
	$product_standard3 = $_POST['product_standard3'];
	$product_standard4 = $_POST['product_standard4'];
	$product_standard5 = $_POST['product_standard5'];
	$product_standard6 = $_POST['product_standard6'];
	

	if($product_image=='' OR $product_title=='' OR $product_price=='' OR $p_desc==''  )
	{
	echo "<script>alert('Please insert all the product fields!')</script>";
	exit();
	}
	else{
		move_uploaded_file($temp_name,"product_images/$product_image");
		
	$update_products = "update product set product_title='$product_title',product_price='$product_price',product_image='$product_image',product_desc='$product_desc',
	product_details1='$product_details1',product_details2='$product_details2',product_details3='$product_details3',product_details4='$product_details4',product_details5='$product_details5',product_details6='$product_details6',
	product_details_image='$product_details_image',
	product_package1='$product_package1',product_package2='$product_package2',product_package3='$product_package3',product_package4='$product_package4',product_package5='$product_package5',product_package6='$product_package6',
	product_advantage1='$product_advantage1',product_advantage2='$product_advantage2',product_advantage3='$product_advantage3',product_advantage4='$product_advantage4',product_advantage5='$product_advantage5',product_advantage6='$product_advantage6',
	product_standard1='$product_standard1',product_standard2='$product_standard2',product_standard3='$product_standard3',product_standard4='$product_standard4',product_standard5='$product_standard5',product_standard6='$product_standard6'
	where product_id='$update_id'";
	
	$run_update = mysqli_query($con, $update_products);
	
	if($run_update){
		
		echo "<script>alert('Product Updated Successfully')</script>";
		echo "<script>window.open('index.php?view_products','_self')</script>";
	}
	}
}

 ?>