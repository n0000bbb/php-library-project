<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>หน้าหลัก - Library of Sakolraj</title>
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
                    <a href="index.php" class="nav-link text-white active">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a href="users.php" class="nav-link text-white">ผู้ใช้</a>
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
    <h3>ยินดีต้อนรับเข้าสู่ระบบห้องสมุด</h3>
    <p class="text-muted">Library Management System</p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <h5>👥 ผู้ใช้</h5>
                    <p>ข้อมูลผู้ใช้งาน</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <h5>📚 หนังสือ</h5>
                    <p>รายการหนังสือ</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <h5>📖 รายการยืม</h5>
                    <p>ประวัติการยืม–คืน</p>
                </div>
            </div>
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
