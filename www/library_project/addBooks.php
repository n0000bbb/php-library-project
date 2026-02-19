<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookname = $_POST['bookname'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $status = $_POST['status'];

    echo "<script>alert('รับข้อมูลหนังสือเรียบร้อย');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>เพิ่มหนังสือ - Library of Sakolraj</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>เพิ่มหนังสือ</h3>
    <form method="POST">

        <div class="mb-3">
            <label>ชื่อหนังสือ</label>
            <input type="text" name="bookname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>ผู้แต่ง</label>
            <input type="text" name="author" class="form-control">
        </div>

        <div class="mb-3">
            <label>หมวดหมู่</label>
            <input type="text" name="category" class="form-control">
        </div>

        <div class="mb-3">
            <label>สถานะ</label>
            <select name="status" class="form-control">
                <option value="1">ว่าง</option>
                <option value="0">ถูกยืม</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">บันทึก</button>
        <a href="books.php" class="btn btn-secondary">กลับ</a>

    </form>
</div>
</body>
</html>
