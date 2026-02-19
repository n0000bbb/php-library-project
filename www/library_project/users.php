<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>ผู้ใช้ - Library of Sakolraj</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
        .sidebar {
            min-height: 100vh;
        }
        .nav-link.active {
            background-color: #0d6efd;
            color: #fff !important;
        }
    </style>
</head>
<body>

<div class="container-fluid">
<div class="row">

<!-- Sidebar -->
<nav class="col-md-2 bg-dark sidebar text-white p-3">
            <h5 class="text-center mb-4">📚 Library of Sakolraj</h5>

            <ul class="nav nav-pills flex-column gap-1">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a href="users.php" class="nav-link text-white active">ผู้ใช้</a>
                </li>
                <li class="nav-item">
                    <a href="books.php" class="nav-link text-white">หนังสือ</a>
                </li>
                <li class="nav-item">
                    <a href="borrowing.php" class="nav-link text-white">การยืม</a>
                </li>
            </ul>

            <hr class="text-secondary">
            <button class="btn btn-outline-light btn-sm w-100">Logout</button>
        </nav>


<!-- Content -->
<main class="col-md-10 bg-light p-4">
    <h3>ผู้ใช้</h3>
    <p class="text-muted">รายการผู้ใช้งานในระบบ</p>

    <a href="addUsers.php" class="btn btn-success mb-3">+ เพิ่มผู้ใช้</a>
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-secondary text-center">
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>ชื่อ-สกุล</th>
                        <th>Email</th>
                        <th>ประเภท</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>Ex.</td>
                        <td>admin</td>
                        <td>ผู้ดูแลระบบ</td>
                        <td>admin@mail.com</td>
                        <td><span class="badge bg-danger">Admin</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm">แก้ไข</button>
                            <button class="btn btn-danger btn-sm">ลบ</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

</div>
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="scripts.js"></script>

</body>
</html>
