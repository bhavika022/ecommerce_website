@echo off
set "PATH=%PATH%;I:\xampp\htdocs\ecomm"
call I:
call cd xampp\htdocs\ecomm 
:loop
call php index.php Tools
Pause