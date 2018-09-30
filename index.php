<?php
//render the header and navigation
$title='My Resume';
include ('./Components/header.php');
?>

  <main id="home">
    <h1 class="lg-heading">
      Jing (Ava)
      <span class="text-secondary">Zhang</span>
    </h1>
    <h2 class="sm-heading">
      Web Developer, Programmer, Designer 
    </h2>
    <div class="icons">
      <a href="https://www.facebook.com/profile.php?id=100009860117231&ref=bookmarks">
        <i class="fab fa-facebook fa-2x"></i>
      </a>
      <a href="https://linkedin.com/in/jing-zhang-156458bb">
        <i class="fab fa-linkedin fa-2x"></i>
      </a>
      <a href="https://github.com/JingAva">
        <i class="fab fa-github fa-2x"></i>
      </a>
    </div>
  </main>

<?php
//render the footer
include ('./Components/footer.php');
?> 