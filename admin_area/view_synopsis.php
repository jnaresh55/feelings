<html>
<head><link rel="stylesheet" type="text/css" href="table.css"></head>

<body>
<?php 
if(isset($_GET['view_synopsis'])){ ?>
<div class="page">
 <h1>Home synopsis</h1>
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
<?php 
}
 ?>
</body>
