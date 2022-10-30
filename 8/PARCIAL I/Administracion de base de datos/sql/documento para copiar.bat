set anio=%date:~6,4%
set mes=%date:~3,2%
set dia=%date:~0,2%

set nombre=res20_%anio%%mes%%dia%.sql

cd C:\Program Files\MySQL\MySQL Server 8.0\bin

mysqldump -u root -h localhost -P 3306 si admin> C:\Users\acer\Desktop\sql\%nombre%