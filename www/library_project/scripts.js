// แจ้งเตือนสำเร็จ
function successAlert(message, redirectUrl = null) {
    Swal.fire({
        icon: 'success',
        title: 'สำเร็จ',
        text: message,
        confirmButtonColor: '#3085d6'
    }).then(() => {
        if (redirectUrl) {
            window.location.href = redirectUrl;
        }
    });
}

// แจ้งเตือนผิดพลาด
function errorAlert(message) {
    Swal.fire({
        icon: 'error',
        title: 'เกิดข้อผิดพลาด',
        text: message,
        confirmButtonColor: '#d33'
    });
}

// ยืนยันการลบ
function confirmDelete(deleteUrl) {
    Swal.fire({
        title: 'คุณแน่ใจหรือไม่?',
        text: "ข้อมูลจะถูกลบถาวร!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'ใช่, ลบเลย',
        cancelButtonText: 'ยกเลิก'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = deleteUrl;
        }
    });
}
