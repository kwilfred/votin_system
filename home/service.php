<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Chama Voting Management -Home Page</title>
    
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
        <h1>Our Services</h1>
    </section>


    <!-- Services -->
    <section class="service">
        <h1>Services We Offer</h1>
        <p>We offer online voting services to all our clients. Join us today
            and experience the seamless and reliable voting services, anywhere 
            anytime.
        </p>
        <div class="row">
            <div class="s-col">
                <h3>Registration</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, omnis. Officia voluptatum velit illum odio ab animi labore, amet minima ea molestias voluptatem possimus tempora neque, facere quaerat commodi nemo!</p>
            </div>
            <div class="s-col">
                <h3>Login</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, omnis. Officia voluptatum velit illum odio ab animi labore, amet minima ea molestias voluptatem possimus tempora neque, facere quaerat commodi nemo!</p>
            </div>
            <div class="s-col">
                <h3>Voting</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, omnis. Officia voluptatum velit illum odio ab animi labore, amet minima ea molestias voluptatem possimus tempora neque, facere quaerat commodi nemo!</p>
            </div>
        </div>

    </section>
    
     <!-- Facilitie -->
     <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde assumenda exercitationem, dolores eum illum, ullam reprehenderit maxime necessitatibus obcaecati explicabo eveniet, perferendis fugiat? Maiores, quas omnis laborum numquam sequi exercitationem. </p>

        <div class="row">
            <div class="f-col">
                <img src="./images/3.jpg" alt="">
                <h3>Online User Training</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam aperiam eum, corrupti nulla sunt architecto laboriosam quis voluptates ut ratione? Architecto magni animi magnam harum quis minus assumenda ea facere!</p>
            </div>
            <div class="f-col">
                <img src="./images/a.jpg" alt="">
                <h3>Mobile Voting</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam aperiam eum, corrupti nulla sunt architecto laboriosam quis voluptates ut ratione? Architecto magni animi magnam harum quis minus assumenda ea facere!</p>
            </div>
            <div class="f-col">
                <img src="./images/4.png" alt="">
                <h3>Online Consultation</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam aperiam eum, corrupti nulla sunt architecto laboriosam quis voluptates ut ratione? Architecto magni animi magnam harum quis minus assumenda ea facere!</p>
            </div>
        </div>

    </section>
    

    <section class="cta">
        <h1>Apply For Our Services Today<br> Anywhere Around The World</h1>
        <a href="./contact.php" class="hero-btn">CONTACT US</a>
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