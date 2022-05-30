<?php 
include "server.php";


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
  <table class="table my-5">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

  <?php 

$sql = "select * from techtable";
$result = mysqli_query($conn, $sql);

if($result) {
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['ID'];
        $name = $row['username'];
        $email = $row['email'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td> <button class="btn-success "> <a class="text-light" href="update.php?updateId='.$id.'"> Update </a> </button> 
            <button class="btn-danger" Onclick="confirm_delete()"> <a class="text-light" href="delete.php?deleteId='.$id.'"> Delete </a> </button> </td>
      </tr>';
    }
}

?>

    
  </tbody>
</table>
  </div>













  <script>
  
  function confirm_delete(){
  if(confirm("Are you sure you want to delete this..?") === true){
      return true;
  }else{
      return false;
 }
}

</script>
</body>
</html>