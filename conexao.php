<?php
define('HOST', 'localhost');
define('USUARIO', 'id19605917_ecommerce');
define('SENHA', 'A^H9VLshhRzR&e0^');
define('DB', 'id19605917_login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');