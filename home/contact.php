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
        <div>
            <h1>CONTACT US</h1>
        </div>
    </section>

    <!-- Contact us -->
    <section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d333051.84245546034!2d37.18569546857731!3d-0.49555805945634784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1676827576061!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- ontact-info -->

    <section class="contact-us">
        <div class="row">
            <div class="cont-col">
                <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>A104, Road, ABC Building</h5>
                    <p>Nairobi, Nakuru, Eldoret</p>
                </span>
                </div>
            </div>
            <div class="cont-col">
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+254 746418753</h5>
                    <p>Open Sunday to Friday, 8AM to 6PM</p>
                </span>
                </div>
            </div>
            <div class="cont-col">
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>kwilfred362@gmail.com</h5>
                    <p>Email Us Your Query</p>
                </span>
                </div>
            </div>

        </div>
        <div class="comment-box">
                <form action="./formhandler.php">
                    <legend><fieldset><br><br><h3>Leave a Comment Here</h3>
                    <input type="text" name="name" placeholder="Enter Your Name" required="required"><br>
                    <input type="email" name="email" placeholder="Enter your Email" required="required"><br>
                    <textarea name="txt" placeholder="Your Comment" cols="30" rows="10"></textarea><br><br>
                    <button type="submit" class="hero-btn red-btn">Send Message</button><br><br><br>
                    </fieldset></legend>
                </form>
            </div>
    </section>

    <!--  -->


    <!-- ****************** -->
    <br><br><br>
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