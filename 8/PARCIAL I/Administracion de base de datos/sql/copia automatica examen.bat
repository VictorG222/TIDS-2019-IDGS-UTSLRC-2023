set anio=%date:~6,4%
set mes=%date:~3,2%
set dia=%date:~0,2%

set nombre=respaldo%dia%%mes%%anio%.sql

cd C:\Program Files\MySQL\MySQL Server 8.0\bin

mysqldump -u root -h localhost -P 3306 ut_2022_victor > C:\Users\acer\Desktop\%nombre%