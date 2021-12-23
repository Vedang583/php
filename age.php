<?php
if(isset($_POST['submit']))
{
$age=$_POST['age'];
if($age>=18)
echo "<br><br>you are eligible to vote";
else
echo "<br><br>you are not eligible to vote";
}
?>