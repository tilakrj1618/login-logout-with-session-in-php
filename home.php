<?php
include('conn.php');
session_start();
if (!isset($_SESSION['member_id'])){
header('location:index.php');
}
//
?>
<a href="logout.php">logout</a>
</br>
</br>

<?php
//mag show sang information sang user nga nag login
$member_id=$_SESSION['member_id'];

$result=mysql_query("select * from members where member_id='$member_id'")or die(mysql_error);
$row=mysql_fetch_array($result);

$FirstName=$row['FirstName'];
$LastName=$row['LastName'];

echo $FirstName." ".$LastName;
//ss
?>