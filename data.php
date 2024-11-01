<?php 
$server_name="localhost"; 
$username="root"; 
$password=""; 
$database_name="table1"; 
$conn=mysqli_connect($server_name,$username,$password,$database_name); 
//now check the connection 
if(!$conn) 
{die("Connection Failed:" . mysqli_connect_error());} 
if(isset($_POST['save'])) 
{ 
$student_name = $_POST['student_name']; 
$student_id = $_POST['student_id']; 
$course = $_POST['course']; 
$department = $_POST['department']; 
$phone = $_POST['phone']; 
$email = $_POST['email']; 
$date_of_birth = $_POST['date_of_birth']; 
$gender = $_POST['gender']; 
$parent_name = $_POST['parent_name']; 
$semester = $_POST['semester']; 
$gpa = $_POST['gpa']; 
//For inserting the values to mysql database 
$sql_query = "INSERT INTO details 
(Enter_Student_Name,Enter_Student_ID,Enter_Course,Enter_Department,Enter_Phone
,Enter_Email,Enter_Date_of_Birth,Gender,Enter_Parent_Name,Enter_Semester,Enter_
 GPA)   
VALUES 
('$student_name','$student_id','$course','$department','$phone','$email','$date_of_birth','
 $gender','$parent_name','$semester','$gpa')"; 
if (mysqli_query($conn, $sql_query)) 
{ 
echo "New Details Entry inserted successfully !"; 
} 
else { 
echo "Error: " . $sql ."" . mysqli_error($conn); 
} 
mysqli_close($conn); 
} 
?>