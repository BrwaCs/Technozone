<?php 
include "config.php";




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<link rel="stylesheet" href="mstyle.css">
<link rel="stylesheet" href="css/bootstrap.css">



    <title>Technozone</title>
</head>
<body>


    <!-- NAV NAV NAV NAV NAV NAV NAV NAV NAV NAV NAV NAV NAV NAV NAV NAV -->

<header>

    <nav>
        <div class="logo">TECHNOZONE</div>
        <div class="menu">
        <ul>
            <li><a href="">Home</a></li>
            <li class="d-down">
                <a href="">Products</a>
                    <ul class="d-menu">
                        <ul>
                            <h4>Phones</h4>
                            <li><a href="">iPhone 13 Pro Max</a></li>
                            <li><a href="">Galaxy s10 Plus</a></li>
                            <li><a href="">Huawei Mate Pro</a></li>
                            <li><a href="">Galaxy Note 10</a></li>
                        </ul>

                        <ul>
                            <h4>Laptops</h4>
                            <li><a href="">HP Envy x360</a></li>
                            <li><a href="">Huawei Matebook</a></li>
                            <li><a href="">Macbook Pro</a></li>
                            <li><a href="">HP Omen</a></li>
                        </ul>

                        <ul>
                            <h4>Watches</h4>
                            <li><a href="">Galaxy Fit</a></li>
                            <li><a href="">Galaxy Watch 4</a></li>
                            <li><a href="">Apple Watch SE</a></li>
                            <li><a href="">Huawei Watch GT 3</a></li>
                        </ul>
                    </ul>
            </li>
            <li><a href="#a-sec">About</a></li>
            <li><a href="c.html">Contact</a></li>
            <li><button class="btn btn-light"><a href="index.php" class="text-dark">Sign in</a></button></li>
        </ul>
                    

        
        
    </div>
           

    
    
</nav>


<div class="content">
    <a href="#to-here" class="tour">Take a Tour</a>
    <h1>Weclome to TECHNOZONE</h1>
    <p>Make life eaiser with modern technology!</p>
</div>

</header>

<!-- CAT CAT CAT CAT CAT CAT CAT CAT CAT CAT CAT CAT ACAT CAT CAT -->
<div class="container-fluid">
<div class="grid-col" id="to-here">
    <div class="cats">
    <img src="imgg/44.png" alt="">
    <h4>Phones</h4>
    </div>
    <div class="cats">
        <img src="imgg/22.png" alt="">
        <h4>Laptops</h4>
        </div>
        <div class="cats">
            <img src="imgg/33.png" alt="">
            <h4>Tablets</h4>
            </div>
            <div class="cats">
                <img src="imgg/11.png" alt="">
                <h4>Watches</h4>
                </div>

</div>
</div>





<!-- ksdkjlffkljklfjslkfjs -->


<div class="iframe-container">
    <h1>New Technologies</h1>
    <iframe width="70%" height="500px" src="https://www.youtube.com/embed/eCPfxY2UwXo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

        <div class="container">
       
        </div>

        <div class="container">
    
    
    <form action="">
    <table>
        <tbody>
            <?php 
            $sql = "select * from product";
            $result = mysqli_query($conn, $sql);

            if($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    $id = $row['ID'];
                    $name = $row['name'];
                    $iimg = $row['image'];
                    $product = $row['price'];

            
       echo '<tr>
            <td>
                <div class="card">
                    <div class="circle"> </div>
                    <div class="content">
                        <h2>'.$name.'</h2>
                        <h4>'.$product.'</h4>
                        <button class="btn btn-primary" name="cart">Add to Cart</button>                        
                    </div>
                    <img src="img/'.$iimg.'" alt="">
                </div>
                </td>
                </tr>
                <br>';
                }
            }
                ?>
            </tbody>
        </form>
    </table>

</div>
</div>
<br>
<div class="container-fluid">
<section class="a-about" id="a-sec" name="a-sec">
    <div class="a-content">
    <img src="imgg/george-prentzas-SRFG7iwktDk-unsplash.jpg" alt="">
    <div class="a-text">
        <h1>About Us</h1>
        <h5>Quality | Price</h5>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Nihil eligendi minima repudiandae ex assumenda, consequatur
            a autem. Quam assumenda eos optio officiis architecto
            molestias aut, sapiente rem expedita, magnam et.</p>
            <a href="c.html"><button class="a-button" >Contact</button></a>
    </div>
</div>
</section>
</div>



  <!-- FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER FOOTER -->
<div class="container-fluid">
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- MARK MARK MARK MARK MARK MARK MARK MARK MARK MARK MARK MARK -->

<marquee behavior="" direction="" scrollamount="10"><img src="imgg/a.png" alt=""> Apple

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="imgg/huawei.png" alt=""> Huawei
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="imgg/sam.png" alt=""> Samsung
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="imgg/hp.png" alt="">HP
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="imgg/dell.png" alt=""> Dell
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="imgg/asus.png" alt=""> Asus
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="imgg/sony.png" alt=""> Sony
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="imgg/office.png" alt=""> Microsoft


</marquee>
<!-- TOP TOP TOP TOP TOP TOP TOP TOP TOP TOP TOP TOP TOP TOP -->



<a href="#" class="to-top">
    <i class="fas fa-chevron-up"></i>
</a>


<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>