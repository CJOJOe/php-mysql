#CT519 Final Lab
การเตรียมการระบบ Cloud การ deploy ตัว code มาทำงาน

ระบบออกแบบโดยใช้ PHP เป็นส่วนของ frontend โดยใช้ template css ของ CORSO และใช้ฐานข้อมูลเป็น MYSQL
โดยจะแยกเป็น 2 container ใน docker

ส่วนของ sourcecode จะมีการเก็บไว้ที่ github สามารถดึงลงมาที่เครื่องที่ต้องการได้
ส่วนการ deploy จะนำขึ้น EC2 AWS Cloud และสร้าง container ผ่านคำสั่งของ docker-compose 

โครงสร้างของระบบ 
Virtual machine (Host) บน EC2 AWS 
  2vCPU, 4GB memory, SSD 20GB
  ติดตั้ง docker, docker-compose
Container ถูกรันผ่าน docker-compose
1.web server เป็น container เชื่อมต่อกับฐานข้อมูลผ่าน internal network
2.database server เป็น containner เชื่อมต่อกับ web server ผ่าน internal network

ฐานข้อมูล
ออกแบบทั้งหมด 5 field เพื่อเก็บข้อมูลของหนังสือ ได้แก่
 ID: book_id INT AUTO_INCREMENT PRIMARY KEY,
 Name: book_name VARCHAR(255) NULL,
 Author: book_author VARCHAR(255) NULL,
 Year: book_year VARCHAR(255) NULL,
 Page: book_page INT NULL

การทำงานของหน้า เพิ่ม แก้ไข และ ลบข้อมูลของหนังสือ 
จะใช้ ID เป็นหลักในการเพิ่มหรือแก้ไขหนังสือ ซึ่งจะมีการเชค ID หากตรวจสอบพบว่าเป็น ID ใหม่จะเพิ่มข้อมูลใหม่หลังจากกด submit
หากต้องการแก้ไขกด ปุ่มรูปดินสอ จะเป็นการเรียกข้อมูลเดิมขึ้นมาแสดงในฟอร์มและกด submit อีกครั้ง
การลบข้อมูลจจะใช้ ปุ่มรูป X เพื่อลบข้อมูลแต่ละรายการ
