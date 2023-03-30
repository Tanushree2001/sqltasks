<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- form started  -->
<form action="action.php" method="post">
    <!-- input for employee id  -->
  <label for="employee_id">Employee id : </label>
  <input type="text" name="employee_id" required><br>

  <!-- input for first name  -->
  <label for="first_name">Employee First Name : </label>
  <input type="text" name="first_name" required><br>

  <!-- input for last name  -->
  <label for="last_name">Employee Last Name : </label>
  <input type=" text" name="last_name" required><br>
 
  <!-- input for graduation percent -->
  <label for="grad_per">Graduation Percentile : </label>
  <input type="text" name="grad_per" required><br>
   
  <!-- input for salary -->
  <label for="salary">Employee Salary : </label>
  <input type="text" name="salary" required><br>

  <!-- input for employee code  -->
  <label for="code">Employee Code : </label>
  <input type="text" name="code" required><br>
 
  <!-- input for code name  -->
  <label for="code_name">Employee Code Name : </label>
  <input type="text" name="code_name" required><br>

  <!-- input for Employee domain name  -->
  <label for="domain">Employee Domain Name : </label>
  <input type="text" name="domain" required><br>

  <input type="submit" value="Submit">
</form>
<!-- form closed  -->
</body>
</html>