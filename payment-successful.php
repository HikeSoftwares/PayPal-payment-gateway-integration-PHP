<!DOCTYPE html>
<?php session_start();

include("../config/config.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paypal Integration Test - Success</title>
</head>
<body>

	<h1>Successful Payment</h1>
    <?php 
    
    
    $query = mysqli_query($con,"UPDATE user set subscribe_status='1',plan_name='".$_SESSION['planname']."',payment_status='Completed' where auto_id='".$_SESSION['logid']."'");
    
    
    ?>
    <script>
       // var timer = setTimeout(function() {
            //window.location='../sucess'
        //}, 1000);
        
        
        
    </script>
    
    <script type="text/javascript">if (screen.width > 0) { window.location = "../sucess"; } </script>


</body>
</html>
