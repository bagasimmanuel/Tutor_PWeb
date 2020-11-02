<?php
    session_start();
    include 'header.php'

?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><img src="images/peeporip.gif" alt="PEEPORIP" width="50px"></a>
    <?php if ($_SESSION) : ?>
        <p class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0"><?php echo $_SESSION['username']?> </p>
        <a href="logout.php">Logout bang</a>
    <?php else: ?>
    <ul class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
    <?php endif; ?>
  </div>
</nav>
    <div class="container">
        <p>tes</p>
    </div>

<? include 'footer.php' ?>

    