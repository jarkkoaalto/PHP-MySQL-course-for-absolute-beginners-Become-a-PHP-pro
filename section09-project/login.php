   
   <?php
        require_once 'includes/header.php';
   ?>

<div>
    <h1>Log in</h1>
    <p>No account? <a href="register.php">Register here</a> </p>

   <form action="includes/login-inc.php" method="POST">
       <input type="test" name="username" placeholder="Username">
       <input type="password" name="password" placeholder="Password">
       <button type="submit" name="submit">Login</button>
   </form>
</div>
   
   <?php
    require_once 'includes/footer.php';

    ?>
