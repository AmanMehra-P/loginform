<?php
// Initialize the session
session_start();
 
//Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: dasboard.php");
    exit;
}
?>
 
        <!-- <?php
        //if(!$_SESSION["loggedin"]){ ?>

            <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">logout </a>
        </li>
     <?php  // }
    //else{
    ?> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo htmlspecialchars($_SESSION["username"]); ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="logout.php">Sign Out</a></li>
              <li><a class="dropdown-item" href="reset-password.php">Reset Password</a></li>
            
          </ul>
        </li>
<?php
  // }
    ?>

      </ul>
   
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <h1 class="my-5">Hi, <b><?php //echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p> -->
</body>
</html>