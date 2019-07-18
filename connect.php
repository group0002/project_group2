<?php
$ketnoi['host'] = 'localhost';
$ketnoi['dbname'] = 'sign_up';
$ketnoi['username'] = 'vohai';
$ketnoi['password'] = '12345678';
@mysql_connect(
    "{$ketnoi['host']}",
    "{$ketnoi['username']}",
    "{$ketnoi['password']}")
or
die("Không thể kết nối database");
@mysql_select_db(
    "{$ketnoi['dbname']}")
or
die("Không thể chọn database");