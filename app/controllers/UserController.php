<?php
// Membuat class UserController untuk mengelola data pengguna.
// registerUser() untuk menyimpan data pengguna baru.
// getUsers() untuk mengambil semua data pengguna dari database
require_once ('models/Koneksi.php');

class UserController extends Koneksi {
    
    public function registerUser($username, $email, $password, $browser, $ipAddress) {
        try {
            $conn = $this->getConnection();
            $stmt = $conn->prepare("INSERT INTO users (username, email, password, browser, ip_address) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param('sssss', $username, $email, $password, $browser, $ipAddress);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function getUsers() {
        try {
            $conn = $this->getConnection();
            $stmt = $conn->prepare("SELECT id, username, email, created_at FROM users ORDER BY created_at DESC");
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (Exception $e) {
            return [];
        }
    }
}
