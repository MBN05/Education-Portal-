<html>
<style>
body{ background-image: url('https://i.pinimg.com/736x/60/22/52/602252b4b408f8b8902c94868e6f3ced.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
text-align:center;
}
</style>
<body>
<?php 
$t1=$_POST["Na"];
$t2=$_POST["choice"];
$t3=$_POST["Mo"];
$t4=$_POST["Em"];
$t5=$_POST["Pa"];
$t6=$_POST["CP"];
 $conn=new mysqli('localhost','root','','chec');
 if(!$conn)
 echo "Connection error";
 else{
  $stmt=$conn->prepare("insert into log(t1,t2,t3,t4,t5,t6)
  values(?,?,?,?,?,?)");
  $stmt->bind_param("ssisss",$t1,$t2,$t3,$t4,$t5,$t6);
  $stmt->execute();
  echo "<h1>Welcome,$t1</h1>";
  echo "<br>";
  echo "<h4>You have been successfully logged in!</h4>";
  $stmt->close();
  $conn->close();
 }
?>
</body>
</html>