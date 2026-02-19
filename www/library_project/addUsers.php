<?php
// ยังไม่เชื่อมต่อฐานข้อมูล
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];

    echo "<script>alert('รับข้อมูลเรียบร้อย (ยังไม่บันทึก DB)');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>เพิ่มผู้ใช้ - Library of Sakolraj</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>เพิ่มผู้ใช้งาน</h3>
    <form method="POST">
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Full Name</label>
            <input type="text" name="fullname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control">
                <option value="1">Admin</option>
                <option value="0">User</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">บันทึก</button>
        <a href="users.php" class="btn btn-secondary">กลับ</a>
    </form>
</div>
</body>
</html>
