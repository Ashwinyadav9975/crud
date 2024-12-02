<form action="" method="post">
<input type="text" name="search" placeholder="enter for search">
<button>search</button>
</form>

<?php 
include("./config.php");
if(isset($_POST['search'])){
    $search=$_POST['search'];
    $getstudent=$conn->prepare("select*from user1 where user_name like'%$search%'");
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
        </tr>";
    }
echo"</table border>";
}

?>