<?php
/*
function isvowel($letter){
    $letter=strtolower($letter);
    if($letter=="a" || $letter=="e" || $letter=="i" || $letter=="o" || $letter=="u")
    {
        return true;
    }else{
        return false;
    }
    
    }
    $letter="e";
if(isvowel(($letter))){
    echo"$letter is a vowel";
}else{
    echo"$letter is consonant";
}


for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++){
        echo" *";
    }echo" <br>";

    }

for($i=1;$i<=5;$i++){
    for($j=5;$j>=$i;$j--){
        echo"  *";
    }echo"<br>";
}
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo"  *";
    }echo"<br>";
}
for($i=1;$i<=6;$i++){
    for($j=5;$j>=$i;$j--){
        echo" &nbsp;";
    }
    for($k=1;$k<=$i;$k++){
        echo"  * &nbsp;";
    }
    echo"<br>";
}
for($i=6;$i>=1;$i--){
    for($j=6;$j>=$i;$j--){
        echo" &nbsp;";
    }
    for($k=1;$k<=$i;$k++){
        echo"  * &nbsp;";   
     }
    echo"<br>";
}
for($i=1;$i<=5;$i++){//
    for($j=5;$j>=$i;$j--){
        echo" &nbsp;";//
    }
    for($k=1;$k<=$i;$k++){
        echo"*  ";//
    }
    echo"<br>";
}
if(isset($_POST['submit'])){
    $num=$_POST['number'];
$fact=1;

for($i=1;$i<=$num;$i++){
    $fact=$fact*$i;
    
}
echo"$fact = number";
}

if(isset($_POST['submit'])){
   $cheack=0;
    $num=$_POST['number'];


for($i=2;$i<=$num;$i++)
{
    if($num%$i==0){
$cheack++;
if($cheack==1){
    break;
}
echo"it is not prime number";
    }
}//if($cheack==0){
  //  echo"it is not prime number";
}else{
    echo"it prime number";
}
*/
   //armstrong number
  if(isset($_POST['submit'])){
    $num=$_POST['number'];
   
   $temp=$num;
   $sum=0;
   while($temp!=0){
   $red=$temp%10;
   $sum=$sum+($red*$red*$red);
   $temp=$temp/10;
   }
   if($num==$sum){
    echo"number is armstrong ";
   }else{
    echo"this is not armstrong";
   }
  }
  $num=10;
    $rev=0;
    while($num>=1){
        $re=$num%10;
        $rev=$rev*10+$re;
        $num=$num/10;
    }
    echo "number of reverse".$rev;





?>
<form action="" method="post">
    <input type="text" name="number" placeholder="enter number">
    <input type="submit" name="submit">
</form>