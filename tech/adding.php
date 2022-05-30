<?php 
include "config.php";

if(isset($_POST['submit'])) {

    $product = $_POST['product'];
    $price = $_POST['price'];

    $fileName = $_FILES['iimg']['name'];
    $tmpName = $_FILES['iimg']['tmp_name'];
    $fileSize = $_FILES['iimg']['size'];

    $valid = ['jpg', 'jpeg', 'png'];
    $imageExt = explode('.', $fileName);

    if(!in_array($imageExt, $valid)) {
        echo "";
    }

    else if($fileSize > 1000000000) {
        echo "<script> ('Image is larger than expected');</script>";
    }

    else {
        move_uploaded_file($tmpName, 'img/', $fileName);
    }

    $query = "INSERT INTO `product` (`name`, image, `price`) VALUES('$product', '$fileName', '$price')";
    $result = mysqli_query($conn, $query);

    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
<form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product</label>
    <input type="text" name="product" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="file" name="iimg" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input type="text" name="price" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <button type="submit"  class="btn btn-danger"><a href="ad.php" class="text-light">Go Back</a> </button>
</form>
</div>
</body>
</html>