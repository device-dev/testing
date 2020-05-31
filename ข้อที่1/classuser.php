<?php





class User
{
  
    public function __construct()
    {

         include('connect.php');

 
         $this->mysqli = $mysqli;
        
    }


    public function alluser()     //ข้อ 1.1
    {
   

        $sql =  "SELECT  count(id) as alluser  from users  ";

        $result =  mysqli_query($this->mysqli, $sql);
        
        $user  = mysqli_fetch_assoc($result);
        
        return $user['alluser'];
    }

    public function luckyuser()     //ข้อ 1.2
    {
      
        $sql =  "SELECT  COUNT(DISTINCT user_id)  as alllucky   from lucky_codes   ";

        $result =  mysqli_query($this->mysqli, $sql);
        
        $user  = mysqli_fetch_array($result);
        
        return $user['alllucky'];
    }

    
    public function add_point()     //ข้อ 1.3
    {
      

        $sql =  "SELECT  COUNT(DISTINCT user_id)  as all_user_point   from add_points  ";

        $result =  mysqli_query($this->mysqli, $sql);
        
        $user  = mysqli_fetch_assoc($result);
        
        return $user['all_user_point'];
    }

    public function  user_point_lucky()     //ข้อ 1.4
    {
      

        $sql =  "SELECT  COUNT(DISTINCT lucky_codes.user_id,add_points.user_id) as user_point_lucky   from users  Left join  lucky_codes   on users.id =  lucky_codes.user_id  
        Left join  add_points   on users.id =  add_points.user_id  ";

        $result =  mysqli_query($this->mysqli, $sql);
        
        $user  = mysqli_fetch_assoc($result);


        
        
        return $user['user_point_lucky'];
    }
    public function  Active_user()     //ข้อ 1.4
    {
      

       
        $alllucky  =  $this->luckyuser();
        $all_user_point  =  $this->add_point();
        $user_point_lucky  =  $this->user_point_lucky();

      $sum =  ($alllucky -  $user_point_lucky) +$all_user_point;

      return $sum;


    }
}





?>