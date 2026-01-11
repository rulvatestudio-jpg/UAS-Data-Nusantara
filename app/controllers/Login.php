<?php
// app/controllers/Login.php

class Login extends Controller {
    public function index() {
        $data['judul'] = 'Login System';
        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function prosesLogin() {
        if( isset($_POST['login']) ) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Cek user di database
            $dataUser = $this->model('User_model')->getUserByUsername($username);

            if( $dataUser ) {
                // Cek Password (karena di database kita input biasa, ceknya biasa saja)
                if( $password == $dataUser['password'] ) {
                    // Password Benar! Set Session
                    $_SESSION['username'] = $dataUser['username'];
                    $_SESSION['role'] = $dataUser['role']; // Simpan role (admin/user)
                    $_SESSION['is_login'] = true;

                    header('Location: ' . BASEURL . '/penduduk');
                    exit;
                } else {
                    // Password Salah
                    echo "<script>alert('Password Salah!'); window.location.href='" . BASEURL . "/login';</script>";
                }
            } else {
                // Username tidak ditemukan
                echo "<script>alert('Username tidak ditemukan!'); window.location.href='" . BASEURL . "/login';</script>";
            }
        }
    }

    public function logout() {
        session_destroy(); // Hancurkan semua session
        header('Location: ' . BASEURL . '/login');
        exit;
    }
}