<?php 
include("./config.php");
if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
    $getstudent=$conn->prepare("select *from user1 where user_id='$user_id'");
    $getstudent->execute();
    $result=$getstudent->fetchAll();
    $user_name=$result[0]['user_name'];
    $per_hour_salary=$result[0]['per_hour_salary'];
$working_hour=$result[0]['working_hour'];
$total_salary=$result[0]['total_salary'];
}
if(isset($_POST['update'])){
$user_id=$_POST['update'];
$user_name=$_POST['user_name'];
$per_hour_salary=$_POST['per_hour_salary'];
$working_hour=$_POST['working_hour'];
$total_salary=$_POST['total_salary'];
$updatestudent=$conn->prepare("update user1 set
user_id='$user_id',
user_name='$user_name',
per_hour_salary='$per_hour_salary',
working_hour='$working_hour',
total_salary='$total_salary'
where user_id='$user_id'
");
if($updatestudent->execute()){
    header("location:delete.php");
}else{
    echo"data not updated";
}
}
?>
<form method="post">
<input type="text" value="<?php echo "$user_id"?>"name='user_id'/><br><br>
<input type="text" value="<?php echo $user_name ?>" name="user_name"><br><br>
<input type="text" value="<?php echo $per_hour_salary ?>" name="per_hour_salary"><br><br>
<input type="text" value="<?php echo $working_hour ?>"name="working_hour"><br><br>
<input type="text" value="<?php echo $total_salary ?>"name="total_salary"><br><br>
<button value="<?php echo $user_id;?>"name="update">update</button>

</form>