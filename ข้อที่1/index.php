<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- นำเข้า  CSS จาก dataTables -->
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.css">

<!-- นำเข้า  Javascript จาก  Jquery -->

<body>
   
<?php include('classuser.php');
$user = new User();
$alluser  =  $user->alluser();
$alllucky  = $user->luckyuser();
$add_point  =  $user->add_point();
$user_point_lucky  =  $user->user_point_lucky();
$Active_user  =  $user->Active_user();
echo "<br>";
echo "ข้อ1.1 จงหาจำนวนUser ทั้งหมด  จำนวน ".$alluser." คน";
echo "<br>";
echo "<br>";
echo "ข้อ1.2 จงหาจนวนคนส่งรหัสลุ้นทองทั้งหมด จำนวน ".$alllucky." คน";
echo "<br>";
echo "<br>";
echo "ข้อ1.3 จำนวนคนที่สะสมคะแนนทั้งหมด จำนวน ".$add_point." คน";
echo "<br>";
echo "<br>";
echo "ข้อ1.4 จำนวนคนที่สะสมคะแนนและส่งรหัสลุ้นทองทั้งหมด จำนวน ".$user_point_lucky." คน";
echo "<br>";
echo "<br>";
echo "ข้อ1.5 Active User จำนวน ".$Active_user." คน";
echo "<br>";



?>


</body>

