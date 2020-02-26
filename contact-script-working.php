<?php
	   if(isset($_POST['Send']))
	  {
		  
		  $email=$_POST['name'];
	
		  $email=$_POST['email'];
		   
		   $message=$_POST['message'];
	  
         $to = "baravkard48@gmail.com";
         //$subject = "This is subject";
         
         
         $message = '
<html>
<head>
  <style>
table {
    border-collapse: collapse;
    width:80%;
}

table, td, th {
    border: 2px solid DodgerBlue;
    padding: 15px;
    text-align:center;

}
 tr:nth-child(even)
 {
 background-color: #f2f2f2
     
 }
</style>

</head>
<body>
  <header>
  
<h1>Linewidth Interiors </h1>



  
  </header>
 
  <div class="container">
    <table class="table table-condensed">
	
  <table>
    <tr>
      <td><b>Name:</b></td>
      <td><b>'.$name.'</b></td>
    </tr>
    <tr>
      <td><b>Email:</b></td><td><b>'.$email.'</b></td></b>
    </tr>
   
    <tr>
      <td><b>Message:</b></td><td><b>'.$message.'</td></b>
      
    </tr>
    
  </table>
</body>
</html>';

         
         //$header = "From:nikhil.bachhav@hotmail.com \r\n";
         $header .= "Cc: \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
     mail ($to,$subject,$message,$header);
         
    
}
?>
<script>
alert("Your Mail Has Been Send Successfully.....!!!");
window.location="contact-us.html";
</script>

      
      
