<?php
//render the header and navigation
$title='My Blog';
include ('./Components/header.php');
?>
    

    <main id="blog">
      <!-- login to access more content -->
        <div style="float:right">
            <a class="btn btn-primary" data-toggle="collapse" href="http://localhost/php_project/LR/login.php" role="button" aria-expanded="false" aria-controls="collapseExample">
                Login/Register
            </a>
        </div>
    
  </main>

<?php
//render the footer
include ('./Components/footer.php');
?>