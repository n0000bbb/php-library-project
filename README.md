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
| UserID       | INT(11) AUTO INCREMENT              |
| Username     | VARCHAR(100)                        |
| Password     | VARCHAR(255)                        |
| FullName     | VARCHAR(200)                        |
| Email        | VARCHAR(100)                        |
| Phone        | VARCHAR(20)                         |
| Role         | TINYINT(1)                          |

#### Books
| Column       | Data type                           |
| :---         |    ---:                             |
| BookID       | INT(11) AUTO INCREMENT              |
| BookName     | VARCHAR(200)                        |
| Author       | VARCHAR(200)                        |
| Category     | VARCHAR(200)                        |
| StatusID     | TINYINT(1)                          |

#### Borrowing
| Column       | Data type                           |
| :---         |                    ---:             |
| BorrowID     | INT(11) AUTO INCREMENT              |
| UserID       | INT(11) NULL                        |
| BookID       | INT(11) NULL                        |
| FullName     | VARCHAR(200) NULL                   |
| BookName     | VARCHAR(200) NULL                   |
| ReturnBefore | DATE                                |
| BorrowedDate | DATE                                |
| ReturnedDate | DATE NULL                           |
| StatusID     | TINYINT(1)                          |
