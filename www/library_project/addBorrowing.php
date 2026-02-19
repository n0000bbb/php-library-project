<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST['userid'];
    $bookid = $_POST['bookid'];
    $borrowed = $_POST['borrowed'];
    $returnbefore = $_POST['returnbefore'];
    $status = $_POST['status'];

    echo "<script>alert('รับข้อมูลการยืมเรียบร้อย (ยังไม่บันทึก DB)');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>เพิ่มการยืม - Library of Sakolraj</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>เพิ่มการยืมหนังสือ</h3>

    <form method="POST">

        <div class="mb-3">
            <label>User ID</label>
            <input type="number" name="userid" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Book ID</label>
            <input type="number" name="bookid" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>วันที่ยืม</label>
            <input type="date" name="borrowed" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>กำหนดคืน</label>
            <input type="date" name="returnbefore" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>สถานะ</label>
            <select name="status" class="form-control">
                <option value="1">กำลังยืม</option>
                <option value="2">คืนแล้ว</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">บันทึก</button>
        <a href="borrowing.php" class="btn btn-secondary">กลับ</a>

    </form>
</div>
</body>
</html>
