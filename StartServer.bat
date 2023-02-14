set PATH=%PATH%;%CD%\php
for /f "tokens=2 delims=:" %%a in ('ipconfig ^| findstr IPv4') do set IP=%%a
start php -S %IP%:5199
start chrome http://%IP%:5199/