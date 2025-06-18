 <?php
 include 'conexion.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $id = $_POST['id'];

     // Eliminar la familia de la base de datos
     $stmt = $conn->prepare("DELETE FROM familias WHERE id = ?");
     $stmt->bind_param("i", $id);
     $stmt->execute();

     if ($stmt->affected_rows > 0) {
         echo "Familia eliminada exitosamente.";
     } else {
         echo "Error al eliminar la familia.";
     }

     $stmt->close();
 }

 $conn->close();