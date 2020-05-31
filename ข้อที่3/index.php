
<form  action =""  method="post">
<input type ="text" name ="value"  required=" "onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)" > ป้อนตัวอักษร    

<br>
<br>
<input type ="submit"  name ="submit"  value ="บันทึกข้อมูล"  >
</form>
<?php




if(@$_POST['submit']==true){
$strings =  $_POST['value'];

  

    if (ctype_lower($strings)) {
        echo "ตัวอักษณที่กรอก $strings เป็นตัวเล็กทั้งหมด";
    } else {
        echo "ตัวอักษรที่กรอก $strings ไม่เป้นตัวเล็กทั้งหมด";
    }



}
?>