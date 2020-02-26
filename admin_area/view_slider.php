<html>
<head><link rel="stylesheet" type="text/css" href="table.css"></head>

<body>
<?php 
if(isset($_GET['view_slider'])){ ?>
<div class="page">
 <h1>Home Slider</h1>
<table class="layout display responsive-table">
    <thead>
        <tr>
		     
            <th>Slider ID</th>
			<th>Image</th>
            <th>Slider Name</th>
			<th colspan="2">Action</th>
        </tr>
    </thead>
	<?php
include("includes/db.php");

$i=0;

$get_pro = "select * from slider";
$run_pro = mysqli_query($con, $get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
	
	$p_id = $row_pro['slider_id'];
	$p_title = $row_pro['slider_name'];
	$p_img = $row_pro['slider_image'];
	
	$i++;

 ?>

    <tbody>

        <tr>
            <td class="organisationnumber"><?php echo $i; ?></td>
			<td class="organisationnumber"><img src="slider_images/<?php echo $p_img; ?>" width="200" height="50"></td>
            <td class="organisationname"><?php echo $p_title; ?></td>
			
            <td class="actions">
                <a href="index.php?edit_slider=<?php echo $p_id; ?>" class="edit-item" title="Edit">Edit</a>
                </td><td><a href="delete_slider.php?delete_slider=<?php echo $p_id; ?>" class="remove-item" title="Remove">Remove</a>
            </td>
        </tr>
		<?php } ?>

        
    </tbody>
</table>
</div>
<?php 
}
 ?>
</body>
