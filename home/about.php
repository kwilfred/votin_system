<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCVM -About Us</title>
    
    <!--Css  Link-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>
<body>
    <section class="sub-header">
        <nav>
        <a href="../index.php"><img src="./images/d.jpg" alt=""></a>
            <div class="nav-links" id="nav-links">
            <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="./index.php">HOME</a></li>
                    <li><a href="./about.php">ABOUT</a></li>
                    <li><a href="./service.php">SERVICES</a></li>
                    <li><a href="./blog.php">BLOG</a></li>
                    <li><a href="./contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onClick="showMenu()"></i>
        </nav>
        <h1>About Us</h1>

        </section>
<!-- About us -->


<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>We're The Wordl's Leading E-Voting Service Provider</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis ipsa optio laboriosam quae repellat fugiat reprehenderit beatae molestiae? Magnam asperiores facere veniam natus quibusdam aliquam cum rem exercitationem dicta fuga.</p>
            <a href="./blog.php"class="hero-btn red-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
            <img src="./images/f.jpg" alt="">
        </div>
    </div>
</section>


<!-- Our offices -->
    <section class="comp">
        <h1>Our Offices</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores laborum fugiat labore provident repellat maiores harum omnis recusandae nam magni unde maxime et velit neque, aspernatur blanditiis quo quasi praesentium?</p>

        <div class="row">
            <div class="comp-col">
                <img src="./images/eldi.webp" alt="">
                <div class="layer">
                    <h3>ELDORET</h3>
                </div>
            </div>
            <div class="comp-col">
                <img src="./images/city.webp"  alt="">
                <div class="layer">
                    <h3>NAIROBI</h3>
                </div>
            </div>
            <div class="comp-col">
                <img src="./images/nakuru.jpg"  alt="">
                <div class="layer">
                    <h3>NAKURU</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- ****************** -->
    <section class="txt"><a href="#">Jump To Top</a></section>



    <!-- Footer -->
    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi nobis vel, necessitatibus perferendis ea amet similique enim <br> cupiditate nostrum explicabo quia libero vero maiores modi mollitia eos aut ad aspernatur.</p>

        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-instagram"></i>  
        </div>
        <p>Made with <i class="fa heart-0"></i> by @kwilfred362</p>
    </section>




    <!-- JavaScript for Toogle menu -->
    <script>

        var nav_links= document.getElementById("nav-links");
        function showMenu(){
            nav_links.style.right="0";
        }
        function hideMenu(){
            nav_links.style.right= "-200px";
        }
    </script>
</body>
</html>