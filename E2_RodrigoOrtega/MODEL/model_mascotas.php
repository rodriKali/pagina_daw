<?php
require_once "bd_class.php";

class Mascota {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

   

    public function actualizarEstadoMascota($idMascota) {
        $sql = "UPDATE mascotas SET estado = 'B' WHERE id_mascota = :id_mascota";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute([':id_mascota' => $idMascota]);

        return "Mascota con ID $idMascota ha sido adoptada.";
    }


    public function insertarMascota($id_mascota, $nombre, $especie, $sexo, $id_centro) {
        
        $sql = "INSERT INTO mascotas (id_mascota, nombre, especie, sexo, id_centro, estado) 
                VALUES (:id_mascota, :nombre, :especie, :sexo, :id_centro, 'A')";

    
        $stmt = $this->db->getConnection()->prepare($sql);
    
        $stmt->bindParam(":id_mascota", $id_mascota, PDO::PARAM_INT);
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":especie", $especie, PDO::PARAM_STR);
        $stmt->bindParam(":sexo", $sexo, PDO::PARAM_STR);
        $stmt->bindParam(":id_centro", $id_centro, PDO::PARAM_INT);
    
        if ($stmt->execute()) {
            return "Mascota insertada correctamente.";
        } else {
            return "Error al insertar la mascota.";
        }
    }
    
    
    
    

    public function contarPerrosYGatos() {
        $sql = "SELECT 
                    SUM(CASE WHEN especie = 'P' THEN 1 ELSE 0 END) AS total_perros,
                    SUM(CASE WHEN especie = 'G' THEN 1 ELSE 0 END) AS total_gatos
                FROM mascotas";

        $stmt = $this->db->getConnection()->query($sql);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        return "Total Perros: " . $resultado["total_perros"] . " | Total Gatos: " . $resultado["total_gatos"];
    }

    public function obtenerNombresYEspecies() {
        $sql = "SELECT nombre, especie FROM mascotas";
        $stmt = $this->db->getConnection()->query($sql);
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $resultadoTexto = "";
        foreach ($resultados as $mascota) {
            $resultadoTexto .= "Nombre: " . $mascota['nombre'] . " | Especie: " . $mascota['especie'] . "<br>";
        }
    
        return $resultadoTexto;
    }
    

    public function obtenerLocalidadesCentros() {
        $sql = "SELECT DISTINCT localidad FROM centros";
        $stmt = $this->db->getConnection()->query($sql);
        $resultados = $stmt->fetchAll(PDO::FETCH_COLUMN);

        return $resultados;
    }
}
?>
