<?php
session_start();
$username = 'admin';
$password = 'admin';
$email = 'admin@gmail.com';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password && $_POST['email'] == $email){
        //Membuat Session
        $_SESSION["username"] = $username; 
        echo "Anda Berhasil Login $username <br> Email: $email";
        echo "<br>";
        date_default_timezone_set('Asia/Jakarta');
        echo date("l, m-F-Y, H:i:s a");
        /*Jika Ingisn Pindah Ke Halaman Lain*/
        // header("Location: admin.php"); //Pindahkan Kehalaman Admin
    } else {
        // Tampilkan Pesan Error
        display_login_form();
        echo '<p>Username atau Password Tidak Benar</p>';
    }
}

else { 
    display_login_form();
}
function display_login_form () { ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
    <label for="username">username</label>
    <input type="text" name="username" id="username"> <br><br>
    <label for="password">password</label>
    <input type="password" name="password" id="password"> <br><br>
    <label for="email">email</label>
    <input type="email" name="email" id="email" style="margin-left: 1.6rem;" require> <br><br>
    <input type="submit" name="submit" value="submit">
    </form>    
<?php } ?>