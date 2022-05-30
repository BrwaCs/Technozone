<?php   
include "config.php";


$id = $_GET['updateId'];
if(isset($_POST['submit'])) {
    
        $name = $_POST['product'];
        $price = $_POST['price'];

        $sql = "update product set ID = $id, name = '$name', price = '$price' where ID = $id";
        $result = mysqli_query($conn, $sql);

        if($result) {
            echo "success";
        }
        else {
            die(mysqli_error($conn));
        }
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
    <div class="container my-5">
        <form method="POST" action="">
        <div class="row">
            <div class="col">
            <label for="formGroupExampleInput" class="form-label">Product</label>
            <input type="text" name="product" class="form-control" id="formGroupExampleInput" placeholder="Insert Username Here...">
            </div>
            <div class="col">
            <label for="formGroupExampleInput" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="formGroupExampleInput" placeholder="Insert Email Here...">
            </div>
            
        </div>
        <button class="btn-primary my-5" name="submit">Update</button>
        <button class="btn-danger"><a href="ad.php" class="text-light">Go Back</a></button>
        </form>
        


</div>
</body>
</html>