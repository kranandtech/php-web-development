
<?php 
include_once("./db.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "insert into students (name,email) values('$name','$email')";
    if(mysqli_query($conn,$sql)){
        echo "record inserted";
    }
    else{
        echo "error";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student</title>
</head>
<body>
    <form method="post">
        <label>name</label><br>
        <input type="text" name="name" ><br>
        <label>email</label><br>
        <input type="email" name="email" ><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>