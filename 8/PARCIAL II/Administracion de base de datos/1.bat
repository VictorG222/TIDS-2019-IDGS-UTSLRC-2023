for /f "tokens=1-2 delims=:" %%a in ('ipconfig^|find "IPv4"') do set ip==%%b

set ipAddress=%ip:~1%

echo IP Address: %ipAddress%

cd C:\Program Files\MongoDB\Server\5.0\bin

mongo.exe TestTimeStamps --eval "db.TimeStamps.insert({InicioSesion : new Date(), user : '%ipAddress%'})"

pause