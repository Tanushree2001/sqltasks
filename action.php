<?php

$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "employee";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
  $employee_id = $_POST['employee_id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $grad_per = $_POST['grad_per'];
  $salary = $_POST['salary'];
  $code = $_POST['code'];
  $code_name = $_POST['code_name'];
  $domain = $_POST['domain'];


$query1 = "INSERT INTO employee_code_table (employee_code , employee_code_name, employee_domain) VALUES ('$code','$code_name','$domain')";
$res1 = mysqli_query($conn, $query1);
if(!$res1){
  echo "Error inserting data into employee_code_table: " . mysqli_error($conn);
}

$query2 = "INSERT INTO employee_salary_table (employee_id, employee_salary, employee_code) VALUES ('$employee_id','$salary','$code')";
$res2 = mysqli_query($conn, $query2);
if(!$res2){
  echo "Error inserting data into employee_salary_table: " . mysqli_error($conn);
}

$query3 = "INSERT INTO employee_details_table (employee_id, employee_first_name, employee_last_name ,Graduation_percentile) VALUES ('$employee_id','$first_name','$last_name','$grad_per')";
$res3 = mysqli_query($conn, $query3);
if(!$res3){
  echo "Error inserting data into employee_details_table: " . mysqli_error($conn);
}

if($res1 && $res2 && $res3){
  echo "The record has been inserted successfully!<br>";
}else{
  echo "The record was not inserted successfully.";
}
}
// Fetch and display contents of employee_code_table
$query4 = "SELECT * FROM employee_code_table";
$res4 = mysqli_query($conn, $query4);
if(mysqli_num_rows($res4) > 0){
  echo "<br><br>Contents of employee_code_table:<br>";
  echo "<table border='1' style='border-collapse:collapse;' >";
  echo "<tr><th>Employee Code</th><th>Employee Code Name</th><th>Employee Domain</th></tr>";
  while($row = mysqli_fetch_assoc($res4)){
    echo "<tr><td>".$row["employee_code"]."</td><td>".$row["employee_code_name"]."</td><td>".$row["employee_domain"]."</td></tr>";
  }
  echo "</table>";
}else{
  echo "No records found in employee_code_table.";
}

// Fetch and display contents of employee_salary_table
$query5 = "SELECT * FROM employee_salary_table";
$res5 = mysqli_query($conn, $query5);
if(mysqli_num_rows($res5) > 0){
  echo "<br><br>Contents of employee_salary_table:<br>";
  echo "<table border='1' style='border-collapse:collapse;'>";
  echo "<tr><th>Employee ID</th><th>Employee Salary</th><th>Employee Code</th></tr>";
  while($row = mysqli_fetch_assoc($res5)){
    echo "<tr><td>".$row["employee_id"]."</td><td>".$row["employee_salary"]."</td><td>".$row["employee_code"]."</td></tr>";
  }
  echo "</table>";
}else{
  echo "No records found in employee_salary_table";
}

// Fetch and display contents of employee_details_table
$query6 = "SELECT * FROM employee_details_table";
$res6 = mysqli_query($conn, $query6);
if(mysqli_num_rows($res6) > 0){
  echo "<br><br>Content of employee_details_table:<br>";
  echo "<table border='1' style='border-collapse:collapse;'>";
  echo "<tr><th>Employee ID</th><th>Employee First Name</th><th>Employee Last Name</th><th>Graduation Percentile</th></tr>";
  while($row = mysqli_fetch_assoc($res6)){
    echo "<tr><td>".$row["employee_id"]."</td><td>".$row["employee_first_name"]."</td><td>".$row["employee_last_name"]."</td><td>".$row["Graduation_Percentile"]."</td></tr>";
  }
  echo "</table>";
}else{
  echo "No records found in employee_details_table";
}
?>