<html>
<head></head>

<body>
<div class="card">
          <div class="card-header">
            <h4 class="card-title" id="basic-layout-form">Insert New Product</h4>
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
              <form class="form" method="post" id="insert_product" action="" enctype="multipart/form-data">
                <div class="form-body">
                  <h4 class="form-section"><i class="ft-user"></i> Latest product</h4>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Product Title</label>
                        <input type="text" class="form-control" placeholder="Enter Product Title" name="product_title">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Product Price</label>
                        <input type="text" class="form-control" placeholder="Enter Product Price" name="product_price">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput3">Description</label>
                       <textarea rows="5" class="form-control" name="product_desc" placeholder="About Product"></textarea>
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <label>Select Product Image</label>
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" name="product_image">
                      <span class="file-custom"></span> </label>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Product Details</label>
                        <input type="text" class="form-control" placeholder="Enter Product Details 1" name="product_details1">
						<input type="text" class="form-control" placeholder="Enter Product Details 2" name="product_details2">
						<input type="text" class="form-control" placeholder="Enter Product Details 3" name="product_details3">
						<input type="text" class="form-control" placeholder="Enter Product Details 4" name="product_details4">
						<input type="text" class="form-control" placeholder="Enter Product Details 5" name="product_details5">
						<input type="text" class="form-control" placeholder="Enter Product Details 6" name="product_details6">
						
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label>Select Product Details Image</label>
                    <label id="projectinput7" class="file center-block">
                      <input type="file" id="file" name="product_details_image">
                      <span class="file-custom"></span> </label>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Product Included Packages</label>
                        <input type="text" class="form-control" placeholder="Enter Product included Packages 1" name="product_package1">
						<input type="text" class="form-control" placeholder="Enter Product included Packages 2" name="product_package2">
						<input type="text" class="form-control" placeholder="Enter Product included Packages 3" name="product_package3">
						<input type="text" class="form-control" placeholder="Enter Product included Packages 4" name="product_package4">
						<input type="text" class="form-control" placeholder="Enter Product included Packages 5" name="product_package5">
						<input type="text" class="form-control" placeholder="Enter Product included Packages 6" name="product_package6">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Product Advantages</label>
                        <input type="text" class="form-control" placeholder="Enter Product Advantages" name="product_advantage1">
						<input type="text" class="form-control" placeholder="Enter Product Advantages" name="product_advantage2">
						<input type="text" class="form-control" placeholder="Enter Product Advantages" name="product_advantage3">
						<input type="text" class="form-control" placeholder="Enter Product Advantages" name="product_advantage4">
						<input type="text" class="form-control" placeholder="Enter Product Advantages" name="product_advantage5">
						<input type="text" class="form-control" placeholder="Enter Product Advantages" name="product_advantage6">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="projectinput1">Product Quality Control Standards</label>
                        <input type="text" class="form-control" placeholder="Enter Product Quality Control Standards" name="product_standard1">
						<input type="text" class="form-control" placeholder="Enter Product Quality Control Standards" name="product_standard2">
						<input type="text" class="form-control" placeholder="Enter Product Quality Control Standards" name="product_standard3">
						<input type="text" class="form-control" placeholder="Enter Product Quality Control Standards" name="product_standard4">
						<input type="text" class="form-control" placeholder="Enter Product Quality Control Standards" name="product_standard5">
						<input type="text" class="form-control" placeholder="Enter Product Quality Control Standards" name="product_standard6">
                      </div>
                    </div>
                  </div>
                  
                  
                </div>
                <div class="form-actions">
                  
                  <input type="submit" class="btn btn-primary" name="insert_product" value="Save">
                </div>
              </form>
            </div>
          </div>
        </div>
		</body>
		
		<?php

if(isset($_POST['insert_product'])){
	
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
	
	
	$product_image = $_FILES['product_image']['name'];
	$temp_name = $_FILES['product_image']['tmp_name'];
	$product_details_image = $_FILES['product_details_image']['name'];
	$temp_name = $_FILES['product_details_image']['tmp_name'];

	
	if($product_title=='' OR $product_image=='' OR $product_price=='' OR $product_desc=='' )
	{
	echo "<script>alert('Please Fill all the the fields!')</script>";
	exit();
	}
	else{
		move_uploaded_file($temp_name,"product_images/$product_image");
		
	$insert_products = "insert into product (product_title,product_price,product_image,product_desc,
	product_details1,product_details2,product_details3,product_details4,product_details5,product_details6,
	product_details_image,
	product_package1,product_package2,product_package3,product_package4,product_package5,product_package6,
	product_advantage1,product_advantage2,product_advantage3,product_advantage4,product_advantage5,product_advantage6,
	product_standard1,product_standard2,product_standard3,product_standard4,product_standard5,product_standard6)
	values('$product_title','$product_price','$product_image','$product_desc',
	'$product_details1','$product_details2','$product_details3','$product_details4','$product_details5','$product_details6',
	'$product_details_image',
	'$product_package1','$product_package2','$product_package3','$product_package4','$product_package5','$product_package6',
	'$product_advantage1','$product_advantage2','$product_advantage3','$product_advantage4','$product_advantage5','$product_advantage6',
	'$product_standard1','$product_standard2','$product_standard3','$product_standard4','$product_standard5','$product_standard6'
	)";
	
	$run_product = mysqli_query($con, $insert_products);
	
	if($run_product){
		
		echo "<script>alert('Product inserted Successfully')</script>";
		
	}
	}
}

 ?>