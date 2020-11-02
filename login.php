<?php
    include 'conn.php';
    include 'header.php';

    if(isset($_POST['submit'])){
        // session_start();
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $sql = "SELECT `username`,`password` FROM users WHERE `username` = '$username' AND `password` = '$password'";

        if (mysqli_query($conn, $sql)) {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: index.php');
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
    
    }
    mysqli_close($conn);
?>
    
    <div class="jumbotron">
        <div class="container">
        <h2>Dah daftar bang? Login skuy</h2>
        <form action="login.php" method="POST">
        
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username bang jago">
        </div>
        
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
    </div>

<?php include 'footer.php' ?>