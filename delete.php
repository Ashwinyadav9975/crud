<?php 
include("./config.php");
$getstudent=$conn->prepare("select*from user1");
$getstudent->execute();
$result=$getstudent->fetchAll();
echo"<table border>";
foreach($result as $row){
    echo"<tr>
    <td>".$row['user_id']."</td>
    <td>".$row['user_name']."</td>
    <td>".$row['per_hour_salary']."</td>
    <td>".$row['working_hour']."</td>
    <td>".$row['total_salary']."</td>
    <td><form method='post'>
    <button value=".$row['user_id']." name=delete>delete</button>
    </form></td>
    <td><a href='update.php' value=".$row['user_id'].">edit</a></td>
    </tr>";
}
echo"</table border>";
if(isset($_POST['delete'])){
  echo  $user_id=$_POST['delete'];
    $getstudent=$conn->prepare("delete from user1 where user_id='$user_id'");
    if($getstudent->execute()){
        echo"your data is deleted";
    }else{
        echo"data is not deleted";
    }
}



?>