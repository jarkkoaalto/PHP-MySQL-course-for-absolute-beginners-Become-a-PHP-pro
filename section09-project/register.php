   
   <?php
        require_once 'includes/header.php';
   ?>

<div>
    <h1>Regsiter</h1>
    <p>Already have account? <a href="login.php">Login here</a> </p>

   <form action="includes/register-inc.php" method="POST">
       <input type="test" name="username" placeholder="Username">
       <input type="password" name="password" placeholder="Password">
       <input type="password" name="confirmPassword" placeholder="Confirm Password">
       <button type="submit" name="submit">Register</button>
   </form>
</div>
   
   <?php
    require_once 'includes/footer.php';
    ?>
