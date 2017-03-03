<?php
echo "\r\n  ########################################################################\n";
echo "  #                                                                      #\r\n";
echo "  #                  Bienvenue dans Digirisk                             #\r\n";;
echo "  #           Le logiciel d'aide a la redaction du DUER                  #\r\n";
echo "  #                                                                      #\r\n";
echo "  ########################################################################\r\n\r\n";

ob_start();
include_once( '../xampp/install/install.php' );
$install = ob_get_clean();

ob_start();
exec( str_replace( '\launch', '', 'start /MIN' . getcwd() . '\xampp\xampp_start.exe' ), $launch );
$launch = ob_get_clean();