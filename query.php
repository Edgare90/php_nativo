
create table USUARIOS{
    IdUsuario int,
    NOMBRE varchar(100);
    EDAD int
}

<?php
  $query = "SELECT * FROM USUARIOS WHERE EDAD >= 18";
?>