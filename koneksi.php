<?php
session_start();
//bikin koneksi
$conn = mysqli_connect('localhost','root','','outdoorhub');

//login
if(isset($_POST['login'])){
    //initiate variabel
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' and password='$password'");
    $hitung = mysqli_num_rows($check);
    
    if($hitung>0){
        //jika data ditemukan
        //berhasil login

        $_SESSION['login']= 'True';
        header('location:index.php');
    } else{
        //data tidak ditemukan
        //gagal login

        echo '
        <script>alert("Username atau Password Salah");
        window.location.href="login.php"
        </script>
        ';

    }

}
?>
