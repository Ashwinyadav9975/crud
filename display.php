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
    </tr>";
}
echo"</table border>";

?>