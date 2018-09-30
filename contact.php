<?php
//render the header and navigation
$title='Contact';
include ('./Components/header.php');
?>

  <main id="contact">
    <h1 class="lg-heading">
      Contact
      <span class="text-secondary">Me</span>
    </h1>
    <h2 class="sm-heading">
      This is how you can reach me...
    </h2>
    <div class="boxes">
      <div>
        <span class="text-secondary" mailto="jinginnz0122@gmail.com">Email: </span> jinginnz0122@gmail.com
      </div>
      <div>
        <span class="text-secondary">Phone: </span> 021-08798079
      </div>
      <div>
        <span class="text-secondary">Address: </span> 226/172 Te Atatu South
      </div>
    </div>
  </main>

<?php
//render the footer
include ('./Components/footer.php');
?>