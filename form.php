<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details Form</title>
    <link rel="stylesheet" type="text/css" href="form.css"> </head>
<body>
    <h1>Student Details Form</h1>
    <form id="studentForm" method="post" action="process_form.php" onsubmit="formValidate()" autocomplete="on">
        <label for="name">Name (Legal/Official):</label>
        <input type="text" name="name" pattern="^[a-zA-Z]+(?: [a-zA-Z]+(?: [a-zA-Z]+(?: (?:bin|ibn) )*[a-zA-Z]+)*)*(?: @ [a-zA-Z]+)?$" id="name" required>
        <br>
        <label for="matricNo">Matric No.:</label>
        <input type="text" name="matricNo" id="matricNo" pattern="[A-Za-z0-9]+" required>
        <br>
        <label for="email">Email (Gmail Account):</label>
        <input type="email" name="email" id="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
        <br>
        <label for="currentAddress">Current Address:</label>
        <textarea name="currentAddress" id="currentAddress" pattern="^([\w\s\W]+[\w\W]?)\s([\d\-\\\/\w]*)?" rows="4" cols="50"></textarea>
        <br>
        <label for="homeAddress">Home Address (Emergency):</label>
        <textarea name="homeAddress" id="homeAddress" pattern="^([\w\s\W]+[\w\W]?)\s([\d\-\\\/\w]*)?" rows="4" cols="50"></textarea>
        <br>
        <label for="mobilePhoneNo">Mobile Phone No.:</label>
        <input type="tel" name="mobilePhoneNo" pattern="^\+?[0-9]{2,}[0-9]{7,}$" id="mobilePhoneNo">
        <br>
        <label for="homePhoneNo">Home Phone No. (Emergency):</label>
        <input type="tel" name="homePhoneNo" pattern="^\+?[0-9]{2,}[0-9]{7,}$" id="homePhoneNo">
        <br>
        <button type="submit">Submit</button>
        <a href="logout.php">Logout</a>
    </form>
    <script src="form.js"></script>
</body>
</html>
