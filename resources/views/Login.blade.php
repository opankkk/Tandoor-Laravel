@extends('Index')

@section('Login')
    

<?php

session_start();

$message = array(); // Inisialisasi $message sebagai array kosong

if(isset($_POST['login'])) {

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $password = md5($_POST['password']);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    $sql_user = "SELECT * FROM `member` WHERE email = ? AND password = ?";
    $stmt_user = $conn->prepare($sql_user);
    $stmt_user->bind_param("ss", $email, $password); // Mengikat parameter ke pernyataan
    $stmt_user->execute();

    // Mendapatkan hasil kueri sebagai objek mysqli_result
    $result_user = $stmt_user->get_result();

    // Mendapatkan baris pertama sebagai array asosiatif
    $row_user = $result_user->fetch_assoc();

    // Mengambil jumlah baris yang terpengaruh
    $rowCount_user = $result_user->num_rows;

    if($rowCount_user > 0) {

        if($row_user['user_type'] == 'admin') {
            $_SESSION['admin_id'] = $row_user['id'];
            header('location: admin/index2.php');
            exit();
        } elseif($row_user['user_type'] == 'user') {
            $_SESSION['user_id'] = $row_user['id'];
            header('location: Index.php');
            exit();
        }

    } else {

        // Cek login admin jika tidak berhasil login sebagai pengguna biasa
        $username = $_POST['email']; // Di sini, email akan digunakan sebagai username untuk login admin

        $sql_admin = "SELECT * FROM `admin` WHERE username = ?";
        $stmt_admin = $conn->prepare($sql_admin);
        $stmt_admin->bind_param("s", $username); // Mengikat parameter ke pernyataan
        $stmt_admin->execute();

        // Mendapatkan hasil kueri sebagai objek mysqli_result
        $result_admin = $stmt_admin->get_result();

        // Mendapatkan baris pertama sebagai array asosiatif
        $row_admin = $result_admin->fetch_assoc();

        // Mengambil jumlah baris yang terpengaruh
        $rowCount_admin = $result_admin->num_rows;

        if($rowCount_admin > 0) {
            // Jika username ditemukan di tabel admin
            if($row_admin['password'] == md5($_POST['password'])) {
                $_SESSION['admin_username'] = $username;
                header('location: admin/index2.php');
                exit();
            } else {
                $message[] = 'Incorrect email or password!';
            }
        } else {
            $message[] = 'Incorrect email or password!';
        }

    }

}

?>

<div class="bodyLog">
    <div class="wrapperLog">
        <?php if(isset($message)) : ?>
            <?php foreach($message as $msg) : ?>
                <div class="message">
                    <span><?= $msg ?></span>
                    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <form action="/login" method="POST">
            @csrf   
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"/>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password"/>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-fotgot">
                <label>
                    <input type="checkbox">
                    Remember me
                </label>
                <a href="#">Lupa Password?</a>
            </div>

            <button type="submit" name="login" class="btnLog">Login</button>
            <div class="register-link">
                <p>Tidak memiliki akun?<a href="/Member">Register</a></p>
            </div>
        </form>
    </div>
</div>
    @endsection

