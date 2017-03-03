@ECHO OFF & SETLOCAL

set PHP_BIN=%cd%\xampp\php\php.exe
set CONFIG_PHP=%cd%\launch\launch_digirisk.php
%PHP_BIN% -n -d -q %CONFIG_PHP%

ECHO "\r\n"Demarrage du serveur local
start /MIN %cd%\xampp\xampp_start.exe > %cd%\launch\log_xampp_start.txt

ECHO Lancement du navigateur
start %cd%\fireFox\FirefoxPortable.exe http://localhost/wp-admin/admin-post.php?action=autoconnect

exit