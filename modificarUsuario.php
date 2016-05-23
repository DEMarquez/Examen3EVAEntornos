<?php
echo '
<form method = "get" action = "index.php?action">
	Nombre: <input type="text" value = "'.$profesor["nombre"].'"><br>
	Apellidos: <input type="text" value = "'.$profesor["apellidos"].'"><br>
	Edad: <input type="text" value = "'.$profesor["edad"].'"><br>
	Materia: <input type="text" value = "'.$profesor["materia"].'"><br>
	<input type = "submit" value = "Guardar Cambios">
</form>
';

?>