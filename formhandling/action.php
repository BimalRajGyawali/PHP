<?php

$name = $_POST['name'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$feedback = $_POST['feedback'];

$courses = $_POST['multicourse'];


if(isset($_POST['cars']))
{
$cars = $_POST['cars']; //$cars is an array
}

else {
  $cars = array("Not selected");
}

if(isset( $_POST['agree']))
{
$isAgreed = $_POST['agree'];
}
else {
  $isAgreed = "No";
}

echo "name: $name"."<br>";
echo "password: $password"."<br>";
echo "gender: $gender"."<br>";

//handling MultiSelectedDropDown
echo "Courses: ";
for($i=0; $i< count($courses);$i++)
{
  echo "$courses[$i] ";
}
echo "<br>";

//handling MultiCheckBox

echo "Cars: ";
for($i=0; $i< count($cars);$i++)
{
  echo "$cars[$i] ";
}

echo "<br>";

//handling Single CheckBox
echo "Agree: $isAgreed"."<br>";

echo "course: $course"."<br>";
echo "feedback: <pre>$feedback</pre>"."<br>";




 ?>
