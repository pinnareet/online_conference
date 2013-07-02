<?php
$con=mysqli_connect("localhost","root","Timp4S","test");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    
$sql="INSERT INTO onlineConference (talk, frame)
VALUES
('$_POST[talk]','$_POST[frame]')";

if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}
echo "1 record added";
mysqli_close($con);
?>
