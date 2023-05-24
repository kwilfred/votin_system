<html>
    <body>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <fieldset><legend>Personal Information</legend>
    Name: <input type="text" name="username" placeholder="Enter your username" required="required"><br>
    Gender:
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="other">Other<br>
    Email: <input type="text" name="email" placeholder="Enter your email" required="required"><br>
    password:  <input type="password" name="pswd" placeholder="Enter your password" required="required"><br>
    </fieldset>
    <fieldset><legend>Others</legend>
Website: <input type="text" name="website"><br>
Hobby: <input type="checkbox">Driving
<input type="checkbox">Reading
<input type="checkbox">Playing<br>
Comment: <textarea name="comment" id="#" cols="30" rows="10"></textarea><br>
<input type="submit">
</fieldset>
    </form>
    </body>
</html>