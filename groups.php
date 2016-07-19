<?php
	session_start();
	@include("./function.php");
	if (priorityFunc($_SESSION['priority'])){
		header("Location: ./index.php");
		exit();
		
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Health Centre: Groups</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}
/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing block. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the blocks, instead of the block elements themselves, gets rid of any box model math. A nested block with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}
/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}
/* ~~ This fixed width container surrounds all other blocks ~~ */
.container {
	width: 960px;
	background-color: #FFFFFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}
/* To set width on the table*/
.scroll-table {
	width: 100%;;
	overflow-x:scroll;
}
/* ~~ The header is not given a width. It will extend the full width of your layout. ~~ */
header {
	background-color: #ADB96E;
}
/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the block elements. The elements within these blocks have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the block itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the block element and place a second block element within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a block set to float right). Many times, padding can be used instead. For blocks where this rule must be broken, you should add a "display:inline" declaration to the block element's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar blocks could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the left instead of the right, simply float these columns the opposite direction (all left instead of all right) and they'll render in reverse order. There's no need to move the blocks around in the HTML source.

*/
.sidebar1 {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding-bottom: 10px;
}
.content {
	padding: 10px 0;
	width: 600px;
	float: left;
}
aside {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding: 10px 0;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol {
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
nav ul{
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
nav a, nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	width: 160px;  /*this width makes the entire button clickable for IE6. If you don't need to support IE6, it can be removed. Calculate the proper width by subtracting the padding on this link from the width of your sidebar container. */
	text-decoration: none;
	background-color: #C6D580;
}
nav a:hover, nav a:active, nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background-color: #42E1DA;
	color: #FFF;
}

/* ~~ The footer ~~ */
footer {
	padding: 10px 0;
	background-color: #CCC49F;
	position: relative;/* this gives IE6 hasLayout to properly clear */
	clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
}
/* ~~ Miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty block element as the final element following the last floated block (within the .container) if the footer is removed or taken out of the .container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}

/*HTML 5 support - Sets new HTML 5 tags to display:block so browsers know how to render the tags properly. */
header, section, footer, aside, article, figure {
	display: block;
	text-align: center;
}
-->
</style><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--></head>

<body>

<div class="container">
  <header>
    <a href="/index.php"><img src="/images/photo.jpg" alt="loading" width="180" height="90" id="Insert_logo" style="background-color: #FFFFFF; display: block; background-image: url(src);" /></a>
  </header>
  <div class="sidebar1">
  <nav>
    <ul>
      <li><a href="./studentList.php">Student List</a></li>
      <li style="font-weight:bold"> &nbsp; Groups</li>
      <li><a href="./campaigns.php">Campaigns</a></li>
      <li><a href="./settings.php">Settings</a></li>
      <li><a href="./logout.php">Logout</a></li>
    </ul>
</nav>
    <aside>
      <p>Here you can make new groups or see previous groups already made.</p>
    </aside>
  <!-- end .sidebar1 --></div>
  <article class="content">
  <h3>Groups </h3>
<?php

/*
//receiving values from make a new group
if(isset($_POST['groupname'])){
	$groupnname = $_POST['groupname'];
	$groupnameb = FALSE;
	if(preg_match('/^[a-zA-Z]+$/',$groupname)){
		$groupnameb=TRUE;
		echo "groupnameb=TRUE";
	}
	if((isset($_POST['checkboxGroup1']))&&(isset($_POST['studentid1']))&&(isset($_POST['studentid2']))){
		$checkboxGroup1b = FALSE;
		$checkboxGroup1 = $_POST['checkboxGroup1'];
		$studentid1 = $_POST['studentid1'];
		$studentid2 = $_POST['studentid2'];
		if(($checkboxGroup1=='yes')&&(($studentid2-$studentid1)>0)&&($studentid1>0)){
			$checkboxGroup1b = TRUE;
			echo"checkboxGroup1b = TRUE";
		}
	}
	if((isset($_POST['checkboxGroup2']))&&(isset($_POST['studentcity']))){
		$checkboxGroup2b = FALSE;
		$checkboxGroup2 = $_POST['checkboxGroup2'];
		$studentcity = $_POST['studentcity'];
		$studentcityb=FALSE;
		if(($checkboxGroup2=='yes')&&(preg_match("/[^a-z]/", '',$studentcity))){
			$checkboxGroup2b=TRUE;
			$studentcityb=TRUE;
			echo"checkboxGroup2b = TRUE";
			echo"studentcityb = TRUE";
		}
	}
	if((isset($_POST['checkBoxGroup3_1']))&&((isset($_POST['b1date']))||(isset($_POST['b1month']))||(isset($_POST['b1year'])))){
		$checkboxGroup3_1b = FALSE;
		$checkboxGroup3_1 = $_POST['checkboxGroup3_!'];
	}
}

//For MM/DD/YYYY format
//preg_match('/(?P<month>\d{2})\/(?P<day>\d{2})\/(?P<year>\d{4})/', $string, $result);
//output formed - array('year' => 2013, 'month' => 08, 'day' => 01);
*/
/*$groupname = "";
$checkboxGroup1="";
$studentid1="";
$studentid2="";
$checkboxGroup3="";
$checkboxGroup3_1="";
$checkboxGroup3_2="";
$b1date="";
$b2date="";
$checkboxGroup4_1="";
$checkboxGroup4_2="";
$a1date="";
$a1time="";
$a2date="";
$a2time="";*/
require "./db/db.php";
$k=0;
if(($_POST) && ($_GET['a']==4)) {
	if(isset($_POST['groupname'])){
		$groupname = trim($_POST['groupname']);
		$str = "create view ".$groupname." as select * from student as s left outer join appointment as a on s.student_id = a.student_id_s where";
		$k=$k+1;
	}
	if ((isset($_POST['checkboxGroup1'])) && (($_POST['checkboxGroup1'])=='yes')){
		$studentid1=trim($_POST['studentid1']);
		$studentid2=trim($_POST['studentid2']);
		$str = $str . "  s.student_id between ".$studentid1." and ".$studentid2; 
		$k=$k+1;
	}
	if ((isset($_POST['checkboxGroup2'])) && (($_POST['checkboxGroup2'])=='yes')){
		$studentcity=trim($_POST['studentcity']);
		if($k=1){
			$str = $str . " s.student_city = '".$studentcity."'"; 
		}else{
			$str = $str . "and s.student_city = '".$studentcity."'";
		}
		$k=$k+1;
	}
	if ((isset($_POST['checkboxGroup3'])) && (($_POST['checkboxGroup3'])=='yes')){
		$b1date=trim($_POST['b1date']);
		$b2date=trim($_POST['b2date']);
		if($k=1){
			$str = $str . "s.student_dob between '".$b1date."' and '".$b2date."'";
		}else{
			$str = $str . "and s.student_dob between '".$b1date."' and '".$b2date."'";
		}
		$k=$k+1;
	}
	if ((isset($_POST['checkboxGroup4'])) && (($_POST['checkboxGroup4'])=='yes')){
		$a1date=trim($_POST['a1date']);
		$a2date=trim($_POST['a2date']);
		if($k=1){
			$str = $str . "a.appointment_date between '".$a1date."' and '".$a2date."'";
		}else{
			$str = $str . "and a.appointment_date between '".$a1date."' and '".$a2date."'";
		}
	}
	$result = db($str);
	echo "<section><span> <h4>Your View has been created</h4></span></section>";
	if(isset($_GET['a'])){
	  $_GET['a']=4;
	}
	//$errors = array();
	
	//Validation
	
	/*if(strlen($groupname)==0)
		array_push($errors,"Please enter group name");
	elseif(preg_match("/^[a-z0-9_]+$/i",$groupname))
		array_push($errors,"Please use alphabets and numbers only");*/
		
}

  if(isset($_GET['a'])){
	  $a = $_GET['a'];
	  
	  //Make a new group
	  if ($a==1){
		  echo"<form action='./groups.php?a=4' method='post'>
		  <section class='scroll-table'> 
			<table width='100%' border='0'>
			<tbody>
			  <tr>
				<td>&nbsp;</td>
				<td><span style='width:50px;'>New Name(for group)</span></td>
				<td><input type='text' name='groupname' style='width:100px;'></td>
			  </tr>
			  <tr>
				<td><input type='checkbox' name='checkboxGroup1' id='checkbox1' value='yes'> </td>
				<td>Student ID</td>
				<td><input type='text' name='studentid1' style='width:100px;'></td>
				<td>and</td>
				<td><input type='text' name='studentid2' style='width:100px;'></td>
			  </tr>
			  <tr>
				<td><input type='checkbox' name='checkboxGroup2' id='checkbox2' value='yes'></td>
				<td>Student City</td>
				<td><input type='text' name='studentcity' style='width:100px;'></td>
			  </tr>
			  <tr>
				<td><input type='checkbox' name='checkboxGroup3' id='checkbox3' value='yes'></td>
				<td>Date of Birth</td>
				<td><input type='date' name='b1date' style='width:100px;'></td>
				<td>YY-MM-DD</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>to</td>
				<td><input type='date' name='b2date' value=0 style='width:100px;'></td>
				<td>YY-MM-DD</td>
			  </tr>
			  <tr>
				<td><input type='checkbox' name='checkboxGroup4' id='checkbox4' value='yes'></td>
				<td>Appointment</td>
				<td><input type='date' name='a1date' style='width:100px;'></td>
				<td>YY-MM-DD</td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>to</td>
				<td><input type='date' name='a2date' style='width:100px;'></td>
				<td>YY-MM-DD</td>
			  </tr>
			</tbody>
		    </table>
 	       </section>
	       <input type='submit' name='submit' id='submit' value='Create'>
          </form>";
		   
		   
		   
	  //view existing group	  
	  }elseif($a==2){
		  if(!isset($_POST['viewname'])){
			$str1= "SHOW FULL TABLES IN saurabh1233 WHERE TABLE_TYPE LIKE 'VIEW'";
			$result1 = db($str1);
			$htmlcode = "<section ><form action='./groups.php?a=2' method='post'> <select name='viewname'>";
			while($row1 = $result1->fetch_assoc()){
				  $htmlcode = $htmlcode." <option value=".$row1['Tables_in_saurabh1233']."> ".$row1['Tables_in_saurabh1233']."</option>";
			}
			$htmlcode = $htmlcode ."<select><input type='submit' name='submit1'></form></section>";
		  }else{
			  $str2 = "SHOW COLUMNS FROM ".$_POST['viewname']." FROM saurabh1233";
			  $result2 = db($str2);
			  $htmlcode = "<section class='scroll-table'><table width='200' border='1' ><tbody><tr>";
			  $j=0;
			  while($row2 = $result2->fetch_assoc()){
				  $htmlcode = $htmlcode . "<td>" . $row2['Field'] . "</td>";
				  $colname[$j] = $row2['Field'];
				  $j++;
			  }
			  $htmlcode = $htmlcode . "</tr> ";
			  
			  $str3 = "select * FROM ".$_POST['viewname'];
			  $result3 = db($str3);
			  if($result3->num_rows > 0){
			  	while($row3 = $result3->fetch_assoc()){
					$i=0;
					$htmlcode = $htmlcode ."<tr>" ;
					while($i<$j){
						$htmlcode = $htmlcode . "<td> " . $row3[$colname[$i]] . " </td>";
						$i++;
					}
					$htmlcode = $htmlcode ."</tr>";
				}
			  }
			  $htmlcode = $htmlcode . "</tbody> </table> </section>";
			  
		  }
		  echo $htmlcode;
	  
	  //does not run
	  }elseif($a==3){

		echo "<section class='scroll-table'>";

	 
		
		$sqlstu = "select * from student left outer join appointment 
on student.student_id = appointment.student_id_s
order by student_id
limit 0 , 15";
		$result = db($sqlstu);
		echo "<table width='200' border='1' ><tbody><tr>";
		$colnam = array('student_id','student_name','student_email','student_phone','student_city','student_state','student_zip','student_add_1','student_add_2','student_notes','student_dob','student_miss','appointment_id','appointment_date','appointment_time','appointment_reason');
			echo "<th scope='col'>ID</th>
      <th scope='col'>NAME</th>
      <th scope='col'>EMAIL</th>
      <th scope='col'>PHONE</th>
      <th scope='col'>CITY</th>
      <th scope='col'>STATE</th>
      <th scope='col'>ZIP</th>
      <th scope='col'>ADDRESS 1</th>
      <th scope='col'>ADDRESS 2</th>
      <th scope='col'>NOTES</th>
      <th scope='col'>Date of Birth</th>
      <th scope='col'>MISS</th>
      <th scope='col'>APPOINTMENT ID</th>
      <th scope='col'>APPOINTMENT DATE</th>
      <th scope='col'>APPOINTMENT TIME</th>
      <th scope='col'>APPOINTMENT REASON</th>";
		echo "</tr>";
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$i=0;
				echo "<tr>" ;
				while($i<16){
					if ($i == 1){
						echo "<td>" . ucfirst($row[$colnam[$i]]) . "</td>";
					}else{
						echo "<td> " . $row[$colnam[$i]] . " </td>";
					}
					$i++;
				}
				echo "</tr>";
			}
		}
		echo "</tbody> <table> </section>";
	  }}else{
		echo "<section><span> <a href='./groups.php?a=1'>Make a new Group</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='./groups.php?a=2'>View existing group</a></span>"; 
	 }?>
 
  <!-- end .content --></article>
  
<aside>
    <h4>Welcome Admin</h4>
    <p>&nbsp;</p>
  </aside>

  <footer>
    <p>The above content is not copyrighted. </p>
  </footer>
  <!-- end .container --></div>
</body>
</html>