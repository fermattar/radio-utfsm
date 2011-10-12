<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2011-08-03 20:47:33 --> Severity: Notice  --> Undefined variable: nulo /home/fermatta/public_html/memoria/admin/application/views/weblogin.php 48
ERROR - 2011-08-03 20:47:58 --> SELECT `name`, `lastname`, `rut`
FROM (`Person`)
JOIN `Admin` ON `Admin`.`Person_rut` = `Person`.`rut`
WHERE `Person`.`rut` = 'ff'
AND `Person`.`password` = ''
ERROR - 2011-08-03 20:48:07 --> SELECT `name`, `lastname`, `rut`
FROM (`Person`)
JOIN `Admin` ON `Admin`.`Person_rut` = `Person`.`rut`
WHERE `Person`.`rut` = '111-1'
AND `Person`.`password` = '1234'
