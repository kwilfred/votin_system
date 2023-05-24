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
        <h1>Our Programmes & Schedule For 2023</h1>
    </section>

<!-- Blog Page Content-->
<section class="blog">
    <h1>What's New</h1>
    <p>Welcome to our e-voting platform. We esure transparency and 
                accountability to all our system users. Vote for a better tommorow,
                your vote, your voice. It matters.</p>
    <div class="row">
        <div class="blog-left">
            <img src="./images/np.jpg" alt="">
            <h2>RANCOR</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, voluptatum cupiditate aliquid quidem consequuntur praesentium velit fugit quam tempore cum ipsam porro reprehenderit temporibus distinctio! Vitae corrupti veritatis optio repellat!</p>
        </div>
            <div class="blog-left">
            <img src="./images/v.jpg" alt="">
        <h2>JESIO SATTIO</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, exercitationem atque error quaerat distinctio beatae voluptatem in non reprehenderit, voluptates deleniti necessitatibus perspiciatis similique porro quae inventore harum facilis. Minima.</p>
        </div>
            <div class="blog-left">
            <img src="./images/cpgn.jpg" alt="">
        <h2>ANDREW RICKDEO</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi debitis enim voluptas deserunt? Voluptatum aliquam fuga error veniam sapiente quae sunt libero sit, quaerat esse voluptatem dolorum consequuntur autem repellendus.</p>
        </div>
    </div>
    <div class="comment-box"><form action="./formhandler.php">
        <legend><fieldset><br><br><h3>Leave A Comment Here</h3>
    <input type="text" placeholder="Enter your name" required="required"><br>
    <input type="email" placeholder="Enter your email" required="required"><br>
    <textarea name="txt" placeholder="Your Comment" required="required" cols="30" rows="10"></textarea><br><br>
    <button type="submit" class="hero-btn red-btn">POST COMMENT</button><br><br><br>
</fieldset>
    </legend></form>
    </div>
</section>

    <section class="cta">
        <h1>Wish To Run For An Office?<br>Make A Step Today</h1>
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