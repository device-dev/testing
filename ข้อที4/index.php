
<form  action =""  method="post">
<input type ="text" name ="value"  required=" " maxlength ="10" > ป้อนตัวเลข    

<br>
<br>
<input type ="submit"  name ="submit"  value ="บันทึกข้อมูล"  >
</form>
<?php
if(@$_POST['submit']==true){


$value  = $_POST['value'];

if(preg_match("/^\d+\.?\d*$/",$value) && strlen($value)==10){

echo "เบอร์โทรศัพท์  : ".$value;

}else{

 echo "กรุณากรอกข้อมูลใหม่ (ข้อมูลเบอร์โทรศัพท์)";

}

}

?>