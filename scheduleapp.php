<?php
require "./db/db.php";
$random = substr(number_format(time() * mt_rand(),0,'',''),0,10);
$sql="update appointment_status set status = status + 1 where date = '".$_POST['date']."'  and time = '".$_POST['time']."'";
$sql1="insert into appointment values (".$random.",".$_POST['student'].",'".$_POST['date']."','".$_POST['time']."','".$_POST['reason']."')";
$result = db($sql);
$result1 = db($sql1);
$htmlcode = "Yor appointment has been scheduled for Date: ".$_POST['date']." and Time: ".$_POST['time'].". Your Appointment ID is ".$random.". Please note it down.";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Health Centre: Appointment Scheduler</title>
</head>
<body>
<article align="centre">
<?php echo $htmlcode; ?>
<br/>
<a href="./index.php"> Take me back </a>
</article>
</body>
</html>
