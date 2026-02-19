<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Books</title>

    <!-- Bootstrap 5 -->
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
                    <a href="users.php" class="nav-link text-white">ผู้ใช้</a>
                </li>
                <li class="nav-item">
                    <a href="books.php" class="nav-link text-white active">หนังสือ</a>
                </li>
                <li class="nav-item">
                    <a href="borrowing.php" class="nav-link text-white">รายการยืม</a>
                </li>
            </ul>

            <hr class="text-secondary">
            <button class="btn btn-outline-light btn-sm w-100">Logout</button>
        </nav>

        <!-- Main Content -->
        <main class="col-md-10 bg-light p-4">

            <!-- Page Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h3>Books</h3>
                    <p class="text-muted mb-0">จัดการข้อมูลหนังสือในห้องสมุด</p>
                </div>
            </div>

            <button class="btn btn-success mb-3">➕ เพิ่มหนังสือ</button>

            <!-- Table -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-secondary text-center">
                            <tr>
                                <th>#</th>
                                <th>ชื่อหนังสือ</th>
                                <th>ผู้แต่ง</th>
                                <th>หมวดหมู่</th>
                                <th>สถานะ</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">Ex.</td>
                                <td>PHP & MySQL เบื้องต้น</td>
                                <td>สมชาย ใจดี</td>
                                <td>Programming</td>
                                <td class="text-center">
                                    <span class="badge bg-success">AVAILABLE</span>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-warning btn-sm">แก้ไข</button>
                                    <button class="btn btn-danger btn-sm">ลบ</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">Ex.</td>
                                <td>Database Design</td>
                                <td>John Smith</td>
                                <td>Database</td>
                                <td class="text-center">
                                    <span class="badge bg-danger">BORROWED</span>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-secondary btn-sm" disabled>ไม่ว่าง</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>

    </div>
</div>

</body>
</html>
