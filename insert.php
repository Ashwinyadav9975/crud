<?php
include("./config.php");
if(isset($_POST['submit'])){
    $user_id=$_POST['user_id'];
    $user_name=$_POST['user_name'];
    $per_hour_salary=$_POST['per_hour_salary'];
    $working_hour=$_POST['working_hour'];
    $total_salary=$_POST['total_salary'];
    $getstudent=$conn->prepare("insert into user1(user_id,user_name,per_hour_salary,working_hour,total_salary)
    values('$user_id','$user_name','$per_hour_salary','$working_hour','$total_salary')
    ");
    if($getstudent->execute()){
        echo"your data is inserted";
    }else{
        echo"your data is not inserted";
    }
}


?>
<form action="" method="post">
<input type="text"name="user_id" placeholder="enter user_id"><br><br>
<input type="text"name="user_name" placeholder="enter user_name"><br><br>
<input type="text"name="per_hour_salary" placeholder="enter per_hour_salary"><br><br>
<input type="text"name="working_hour" placeholder="enter working_hour"><br><br>
<input type="text"name="total_salary" placeholder="enter total_salary"><br><br>
<input type="submit" name="submit">
</form>