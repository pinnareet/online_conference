<!DOCTYPE html>
<html>
<head>
<style>
body
{
text-align: center;
}
a
{
font-size: 200%;
}
</style>
</head>

<body>
<div>
<div>
<h1>Recorded Talk: Online Conference by Pin Pin</h1>
<iframe width="420" height="315" src="http://www.youtube.com/embed/5nqesAM1psU" frameborder="0" allowfullscreen></iframe>
<div>
<a href="http://www.kickstarter.com">Join Discussion!</a>
</div>
</div>

<?php
$con=mysqli_connect("localhost","root","Timp4S","test");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
$sql="SELECT frame From onlineConference WHERE talk='Tracking Currency Flow'";
$result = mysqli_query($con, $sql);

if($result->num_rows > 0) {

echo "<div>".
"<h1>LIVE Talk: Tracking Currency Flow by Yilong</h1>";
while($row = mysqli_fetch_array($result)) {
  echo $row['frame'];
}
echo "<div>".
"<a href='http://www.kickstarter.com'>Sign up for Q&A!</a>".
"</div>". 
"</div>";
}
else {
echo "<div>".
"<h1>Upcoming Talk: Tracking Currency Flow by Yilong</h1>".
"<iframe width='560' height='315' src='//www.youtube.com/embed/scZbaTTAbCM' frameborder='0' allowfullscreen></iframe>".
"<div>".
"<a href='http://www.kickstarter.com'>Add to my schedule!</a>".
"</div>".
"<div>".
"<a href='https://plus.google.com/hangouts/_?hso=0' style='text-decoration:none;'>".
"<img src='https://ssl.gstatic.com/s2/oz/images/stars/hangout/1/gplus-hangout-60x230-normal.png' alt='Start a Hangout' style='border:0;width:230px;height:60px;'/>".
"</a>".
"</div>".
"</div>";
}

mysqli_close($con);
?>

<div>
<h1>Upcoming Talk: Capri by Tom</h1>

<iframe width="560" height="315" src="//www.youtube.com/embed/scZbaTTAbCM" frameborder="0" allowfullscreen></iframe>
<div>
<a href="http://www.kickstarter.com">Add to my schedule!</a>
</div>

</div>

</div>
</body>
</html>
