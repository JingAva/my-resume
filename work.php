<?php
//render the header and navigation
$title='My Work';
include ('./Components/header.php');
?>

  <main id="work">
    <h1 class="lg-heading">
      My
      <span class="text-secondary">Work</span>
    </h1>
    <h2 class="sm-heading">
      Check out some of my projects...
    </h2>
    <div class="projects">
      <div class="item">
        <a href="index.php">
          <img src="img/background.jpg" alt="Project">
        </a>
        <a href="index.php" class="btn-light">
          <i class="fas fa-eye"></i> My resume
        </a>
        <a href="https://github.com/JingAva/resume" class="btn-dark">
          <i class="fab fa-github"></i> Github
        </a>
      </div>
      <div class="item">
        <a href="../login-register/login.php">
          <img src="img/background.jpg" alt="Project">
        </a>
        <a href="../login-register/login.php" class="btn-light">
          <i class="fas fa-eye"></i> Login system
        </a>
        <a href="https://github.com/JingAva/login_register" class="btn-dark">
          <i class="fab fa-github"></i> Github
        </a>
      </div>
      <div class="item">
        <a href="https://peaceful-eyrie-37568.herokuapp.com/">
          <img src="img/background.jpg" alt="Project">
        </a>
        <a href="https://peaceful-eyrie-37568.herokuapp.com/" class="btn-light">
          <i class="fas fa-eye"></i> Chatbot
        </a>
        <a href="https://github.com/JingAUT/ChatbotTeam1" class="btn-dark">
          <i class="fab fa-github"></i> Github
        </a>
      </div>
      <div class="item">
        <a href="../cart/public/index.php">
          <img src="img/background.jpg" alt="Project">
        </a>
        <a href="../cart/public/index.php" class="btn-light">
          <i class="fas fa-eye"></i> Shopping cart
        </a>
        <a href="https://github.com/JingAva/shopping_cart" class="btn-dark">
          <i class="fab fa-github"></i> Github
        </a>
      </div>
  
    </div>
  </main>

<?php
//render the footer
include ('./Components/footer.php');
?>