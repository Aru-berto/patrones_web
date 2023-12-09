<?php

include 'conection.php';

class LanguageResource
{
    private $conn;

    public function __construct()
    {
        $connectionInstance = Connection::getInstance();
        $this->conn = $connectionInstance->getConnection();
    }

    public function getLanguages()
    {
        $query = "SELECT * FROM language";

        try {
            $result = $this->conn->query($query);

            if ($result !== false) {
                $rowCount = $result->num_rows;

                if ($rowCount > 0) {
                    $languages = $result->fetch_all(MYSQLI_ASSOC);
                    echo json_encode($languages);
                } else {
                    echo json_encode(["message" => "No se encontraron lenguajes."]);
                }
            } else {
                echo json_encode(["error" => "Error de consulta: " . $this->conn->error]);
            }
        } catch (Exception $e) {
            echo json_encode(["error" => "Error al obtener los lenguajes: " . $e->getMessage()]);
        }
    }
}

$languageResource = new LanguageResource();

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $languageResource->getLanguages();
        break;
    default:
        echo json_encode(["error" => "Método no permitido"]);
}
?>
