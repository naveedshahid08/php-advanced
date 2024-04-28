<?php include 'db.php';
$query = "SELECT * FROM Users";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Query failed');
}


if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];
   

  // Checking the input if not empty
  if(!empty($username) && !empty($password))
  // Inserting data into the DB
  {
    $PDO = $conn->prepare("INSERT INTO Users (username,password) VALUES (?,?)");

    // Bindingthe variables to Prepared statement as string

    $PDO ->bind_param("ss",$username,$password);

    // Executing the Prepared Statement

    if($PDO->execute()){
      // Redirecting to the same page to stop the form being re-submit
      header("location:create.php");
      exit();
    }
    else {
      echo "Error: " . $PDO->error;
    }
  } else {
    echo "Username and password cannot be empty.";
  }

  }


  

  //Update the records in db
  /* $query = "UPDATE Users SET ";
  $query .= "username = '$username', ";
  $query .= "password = '$password' ";
  $query .= "WHERE ID = $id";

  $result = mysqli_query($conn, $query);
  if (!$result) {
    die("Update query failed" . mysqli_error($conn));
  }
  header("Location:create.php");
  exit();
} */

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP CRUD App</title>
</head>

<body>
  <form action="update.php" method="post">

    <label for="username"> Username </label>
    <input type="text" name="username">
    <label for="password"> Password </label>
    <input type="password" name="password">
    <select name="id" id="">
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['ID'];
        echo "<option value='$id'>$id</option>";
      }
      ?>
    </select>
    <input type="submit" name="submit" value="UPDATE">

  </form>


</body>

</html>