@echo off
set "PATH=%PATH%;C:\xampp\htdocs\ecomm"
call C:
call cd C:\xampp\htdocs\ecomm 
:loop
call php index.php Tools database_backup
Pause 