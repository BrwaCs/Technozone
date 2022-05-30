<?php 
include "config.php";



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="cstyle.css">

  <title>Document</title>
</head>




<body>
  <div class="container">
    <button class="btn-danger"><a class=" text-light" href="logout.php">Logout</a> </button>
    <button class="btn btn-primary"><a href="adding.php" class="text-light">Add</a></button>
  <table class="table my-5">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

  <?php 

$sql = "select * from product";
$result = mysqli_query($conn, $sql);

if($result) {
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['ID'];
        $name = $row['name'];
        $iimg = $row['image'];
        $email = $row['price'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$iimg.'</td>
        <td> <button class="btn-success "> <a class="text-light" href="update.php?updateId='.$id.'"> Update </a> </button> 
            <button class="btn-danger"> <a class="text-light" href="delete.php?deleteId='.$id.'"> Delete </a> </button> </td>
      </tr>';
    }
}

?>

    
  </tbody>
</table>
  </div>













  
</body>
</html>