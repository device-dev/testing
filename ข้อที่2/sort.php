<?php 




  $sort = array(3,0,2,5,-1,4,1);

for($i=0; $i<count($sort);$i++)
{
     
    $temp  = $sort[$i];
    $j=$i-1;

    while($j>=0 && $sort[$j]>$temp)
    {
    
        $sort[$j+1]  =$sort[$j];
        $j--;
    }
    $sort[$j+1] = $temp;

}
$s=0;
foreach ($sort as $value)
{ 
    $s++;
    echo "<br>";
    echo "ลำดับที่  $s = <font size =5>$value</font>";



}











?>