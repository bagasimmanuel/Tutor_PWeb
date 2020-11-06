<?php
    session_start();

    $id = $_GET['id'];
    if(!($_SESSION)){
        header('location: login.php?redirectProfile='.$id);
    }
    include 'header.php';

    include 'conn.php';
    $sql = "SELECT * FROM users WHERE id=$id";

    $rows = mysqli_query($conn,$sql);
    $i = 0;
    mysqli_close($conn);

?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">
                <img src="images/peeporip.gif" alt="PEEPORIP" width="50px">
            </a>
            <?php if ($_SESSION) : ?>
                <p class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0"><?php echo $_SESSION['username']?></p>
                <a href="update.php" class="mr-4">Update gan</a> 
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
        <div class="row no-gutters">
            <div class="col-xl-12 img-cover">
                <?php foreach($rows as $row) : ?>
                    <img src="uploads/<?=$row['image']?>" alt="Foto profil <?= $row['username'] ?>" class="cover-img">
                    <div class="overlay-black"></div>
                    <img class="profile-img img-responsive img img-thumbnail" src="uploads/<?=$row['image']?>" alt="Foto profil <?= $row['username'] ?>">
                <?php endforeach;?>
            </div>
        </div>
    <div class="container-xl">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
            <?php foreach($rows as $row) : ?>
                <tr>
                    <td> <?= ++$i ?>  </td>
                    <td> <?=  $row['username'] ?>  </td>
                    <td> <?=  $row['email'] ?>  </td>
                    <td> <img src="uploads/<?=$row['image']?>" alt="Foto profil <?= $row['username'] ?>" class="img-thumbnail" width="200px" height="200px"> </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>

<?php
    include 'footer.php'
?>    