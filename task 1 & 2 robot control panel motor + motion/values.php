<?php
require'db.php';
mysqli_set_charset($cont,'utf8');
?>
<!doctype html>
<html>
<head>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script type="text/javascript" src="index.js"></script>
<link rel="stylesheet" type="text/css"href="index.css"/>


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">




<meta charset="utf-8">
<title>القيم</title>
</head>
<body>






<header style=" background-color:#55A3EC; width:100%; height:150px;">
<center><h1 style="padding-top:80px; color:#FFFFFF"> <strong> سرعة المحركات </strong>  </h1></center>

</header>



<br/><br/><br/><br/><br/>
<div>

<?php
if(isset($_POST['run'])) 
		{
			echo'<center><h1> السرعات </h1></center>';
			 $m1=$_POST['m1']; $m2=$_POST['m2'];$m3=$_POST['m3'];
			 $m4=$_POST['m4']; $m5=$_POST['m5']; $m6=$_POST['m6'];
			 $motion=$_POST['motion']
?>
<center><h1><br/><br/>
<?
echo 'محرك 1  : '.$m1; 
echo '<br/>محرك 2 :  '.$m2;
echo '<br/>محرك 3  :'.$m3; 
echo '<br/>محرك 4 : '.$m4; 
echo '<br/>محرك 5 : '.$m5;
echo '<br/>محرك 6 :'.$m6;
echo' <br/> '. $_POST['motion'].' :اتجاه الحركة  ';
?>
</h1></center><br/><br/>
<?

	
				//$cmd ="insert into values  
	 			//(motor1,motor2,motor3,motor4,motor5,motor6)
				// values('$m1','$m2','$m3','$m4','$m5','m6')
				//	 ";
	
	
	           $cmd =" insert into num  
	(motor1,motor2,motor3,motor4,motor5,motor6)
	 values('$m1','$m2','$m3','$m4','$m5','$m6')
	 ";
	  if(  mysqli_query($cont,$cmd)) { ?>   <center><br/><br/><br/> <? 
				  echo'<h3> تم تخزين السرعات المطلوبة </h3>'; }
                  else{echo mysqli_error($cont);}   
	
			
			
		
		
		switch ($motion)
		
				{
						case'Forward':
						$cmd2 =" insert into motion (F,L,R,B)values('Forward','','','') ";
						 if(  mysqli_query($cont,$cmd2)) { ?>   <center> <? 
								  echo'<h3> تم تخزين الإتجاه المطلوب </h3><br/><br/>'; }
                 					 else{echo mysqli_error($cont);}  
						break;
						case'Left':
						$cmd2 =" insert into motion (F,L,R,B)values('','Left','','') ";
						 if(  mysqli_query($cont,$cmd2)) { ?>   <center> <? 
								  echo'<h3> تم تخزين الإتجاه المطلوب </h3><br/><br/>'; }
                 					 else{echo mysqli_error($cont);}  
						break;		
						case'Right':
						$cmd2 =" insert into motion (F,L,R,B)values('','','Right','') ";
						 if(  mysqli_query($cont,$cmd2)) { ?>   <center> <? 
								  echo'<h3> تم تخزين الإتجاه المطلوب </h3><br/><br/>'; }
                 					 else{echo mysqli_error($cont);}  
						break;	 
						case'Backward':
						$cmd2 =" insert into motion (F,L,R,B)values('','','','Backward') ";
						
						
										
	 					 if(  mysqli_query($cont,$cmd2)) { ?>   <center> <? 
								  echo'<h3> تم تخزين الإتجاه المطلوب </h3><br/><br/>'; }
                 					 else{echo mysqli_error($cont);}
						 break; 
		
				}
		
	}
?>

</div>


<div style=" background-color:#55A3EC; width:100%; height:150px; margin-top:250px;">

<center><h1 style="padding-top:80px; color:#FBFBFB; direction:rtl" >إعداد الطالب : أويس علي القرني </h1></center>

</div>



</body>
</html>