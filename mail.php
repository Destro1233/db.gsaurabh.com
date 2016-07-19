<?php
function mailer($to,$subject)
{
  /*require "./db/db.php";
  $sql="select student_email from ".$list;
  $result = db($sql);*/
  
  // multiple recipients
  if(!isset($to)){
  $to  = 'saurabhthelord@yahoo.com';
  while($row = $result->fetch_assoc()){
	  $to  = $to . ' , ' . $row['student_email'];
  }
  }
  
  /*$to  = 'saurabhji@me.com' . ', '; // note the comma
  $to .= 'saurabhthelord@gmail.com';*/
  
  if(!isset($subject)){
  // subject
  $subject = 'Birthday Reminders for August';
  }
  
  if(!isset($message)){
  // message
  $message = '
  <html>
  <head>
	<title>Test Mail</title>
  </head>
  <body>
	<p>This is just a test mail.</p>
	<table>
	  <tr>
		<th>Person</th><th>Day</th><th>Month</th><th>Year</th>
	  </tr>
	  <tr>
		<td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
	  </tr>
	  <tr>
		<td>Sally</td><td>17th</td><td>August</td><td>1973</td>
	  </tr>
	</table>
  </body>
  </html>
  ';
  }
  
  // To send HTML mail, the Content-type header must be set
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  
  // Additional headers
  //$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
  $headers .= 'From: '.$subject.' <notification@db.saurabh.com>' . "\r\n";
  $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
  $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
  
  // Mail it
  mail($to, $subject, $message, $headers);
}
?>