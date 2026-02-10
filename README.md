# php-library-project

## ชื่อโปรเจค เว็บยืม-คืนหนังสือห้องสมุด

### ความสามารถระบบ<br>
ระบบมีความสามารถดังนี้<br>
- ระบบ Login / Logout<br>
- แยกสิทธิ์ผู้ใช้งาน Admin / User<br>
- จัดการและแสดงข้อมูลหนังสือ<br>
- บันทึกข้อมูลการยืมและการคืนหนังสือ<br>
- ตรวจสอบสถานะการยืมหนังสือ<br>
- แสดงประวัติการยืมย้อนหลัง

### ฐานข้อมูล database schema<br>
#### Users
| Column       | Data type                           |
| :---         |    ---:                             |
| UserID       | INT AUTO INCREMENT PRIMARY KEY      |
| Username     |VARCHAR(100)                         |
| Password     |VARCHAR(255)                         |
| FullName     |VARCHAR(200)                         |
| Email        |VARCHAR(100)                         |
| Phone        |VARCHAR(10)                          |
| Role         |  BOOLEAN                            |

#### Books
| Column       | Data type                           |
| :---         |    ---:                             |
| BookID       | INT AUTO INCREMENT PRIMARY KEY      |
| BookName     |VARCHAR(200)                         |
| Author       |VARCHAR(200)                         |
| Category     |VARCHAR(100)                         |
| Status       |ENUM('AVAILABLE','BORROWED')         |

#### Borrowing
| Column       |             Data type               |
| :---         |                    ---:             |
| BorrowID     |    INT AUTO INCREMENT PRIMARY KEY   |
| UserID       | INT                                 |
| BookID       | INT                                 |
| ReturnBefore | DATE                                |
| BorrowedDate | DATE                                |
| ReturnedDate | DATE                                |
| Status       |ENUM('BORROWED','RETURNED',’OVERDUE’)|
