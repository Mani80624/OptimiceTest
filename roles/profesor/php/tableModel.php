
<?php
include 'connection.php';
session_start();
// Preparar la consulta de forma segura para evitar inyecciones de SQL
$sql = "SELECT * FROM courses WHERE id_teacher = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i', $_SESSION['user_id']);

// Ejecutar la consulta
$stmt->execute();
$result = $stmt->get_result();

echo "
    <table class='table mb-none'>
		<thead>
			<tr>
			    <th>#</th>
			    <th>Nombre del curso</th>
			    <th>Horas del curso</th>
			    <th>Descripción del curso</th>
			    <th>editar/borrar</th>
		    </tr>
	    </thead>
        <tbody>  
";
$array_id_courses = array();
while($row = $result->fetch_assoc()){

    $array_id_courses[]=$row['id_course'];

    echo "
    <tr>
    <td > {$row['id_course']}</td>
    <td> {$row['name_course']}</td>
    <td> {$row['hours']}</td>
    <td> {$row['description']}</td>
    <td class='actions-hover'>
        <a class='edit' id='edit_{$row['id_course']}' ><i class='fa fa-pencil'></i></a>
        <a class='trash' id='trash_{$row['id_course']}'><i class='fa fa-trash-o'></i></a>
    <td>
    </tr>
    ";
}

echo "</tbody>
</table>";
?>

