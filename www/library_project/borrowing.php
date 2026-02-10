<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Borrowing</title>
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
            <h5 class="text-center mb-4">📚 Library</h5>

            <ul class="nav nav-pills flex-column gap-1">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a href="users.php" class="nav-link text-white">ผู้ใช้</a>
                </li>
                <li class="nav-item">
                    <a href="books.php" class="nav-link text-white">หนังสือ</a>
                </li>
                <li class="nav-item">
                    <a href="borrowing.php" class="nav-link text-white active">รายการยืม</a>
                </li>
            </ul>

            <hr class="text-secondary">
            <button class="btn btn-outline-light btn-sm w-100">Logout</button>
        </nav>


<!-- Content -->
<main class="col-md-10 bg-light p-4">
    <h3>Borrowing</h3>
    <p class="text-muted">รายการยืม–คืนหนังสือ</p>

    <table class="table table-bordered table-hover">
        <thead class="table-secondary text-center">
            <tr>
                <th>#</th>
                <th>ผู้ใช้</th>
                <th>หนังสือ</th>
                <th>วันที่ยืม</th>
                <th>กำหนดคืน</th>
                <th>สถานะ</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>1</td>
                <td>student01</td>
                <td>PHP & MySQL</td>
                <td>2026-02-01</td>
                <td>2026-02-07</td>
                <td><span class="badge bg-warning">กำลังยืม</span></td>
            </tr>
        </tbody>
    </table>
</main>

</div>
</div>

</body>
</html>
