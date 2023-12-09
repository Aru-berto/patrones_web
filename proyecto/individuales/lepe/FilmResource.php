<?php
session_start();
include 'conection.php';

class FilmResource
{
    private $conn;

    public function __construct()
    {
        $connectionInstance = Connection::getInstance();
        $this->conn = $connectionInstance->getConnection();
    }

    public function readFilms()
    {
        $limit = isset($_SESSION['username']) ? "" : "LIMIT 10";

        $query = "SELECT * FROM film ORDER BY film_id DESC $limit";

        try {
            $result = $this->conn->query($query);

            if ($result !== false) {
                $rowCount = $result->num_rows;

                if ($rowCount > 0) {
                    $films = $result->fetch_all(MYSQLI_ASSOC);
                    echo json_encode($films);
                } else {
                    echo json_encode(["message" => "No se encontraron resultados."]);
                }
            } else {
                echo json_encode(["error" => "Error de consulta: " . $this->conn->error]);
            }
        } catch (Exception $e) {
            echo json_encode(["error" => "Error al leer las películas: " . $e->getMessage()]);
        }
    }

    public function showFilm($film_id)
    {
        try {
            $query = "SELECT * FROM film WHERE film_id=?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param('i', $film_id);
            $stmt->execute();

            $result = $stmt->get_result();
            $film = $result->fetch_assoc();

            if ($film !== null) {
                echo json_encode($film);
            } else {
                echo json_encode(["message" => "No se encontró la película con ID $film_id."]);
            }
        } catch (Exception $e) {
            echo json_encode(["error" => "Error al obtener detalles de la película: " . $e->getMessage()]);
        }
    }

    public function createFilm($data)
    {
        try {
            $query = "INSERT INTO film (title, description, release_year, language_id, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param('ssiiisssiss', $data['title'], $data['description'], $data['release_year'], $data['language_id'], $data['original_language_id'], $data['rental_duration'], $data['rental_rate'], $data['length'], $data['replacement_cost'], $data['rating'], $data['special_features']);
            $stmt->execute();

            echo json_encode(["message" => "Película creada exitosamente."]);
        } catch (Exception $e) {
            echo json_encode(["error" => "Error al crear la película: " . $e->getMessage()]);
        }
    }

    public function updateFilm($film_id, $data)
    {
        try {
            $query = "UPDATE film SET title=?, description=?, release_year=?, language_id=?, original_language_id=?, rental_duration=?, rental_rate=?, length=?, replacement_cost=?, rating=?, special_features=? WHERE film_id=?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param('ssiiisssissi', $data['title'], $data['description'], $data['release_year'], $data['language_id'], $data['original_language_id'], $data['rental_duration'], $data['rental_rate'], $data['length'], $data['replacement_cost'], $data['rating'], $data['special_features'], $film_id);
            $stmt->execute();

            echo json_encode(["message" => "Película actualizada exitosamente."]);
        } catch (Exception $e) {
            echo json_encode(["error" => "Error al actualizar la película: " . $e->getMessage()]);
        }
    }

    public function deleteFilm($film_id)
    {
        try {
            $sessionActive = isset($_SESSION['username']) ? TRUE : FALSE;
            if ($sessionActive) {
                if ($film_id) {
                    $query = "DELETE FROM film WHERE film_id=?";
                    $stmt = $this->conn->prepare($query);
                    $stmt->bind_param('i', $film_id);
                    $stmt->execute();

                    echo json_encode(["message" => "Película eliminada exitosamente."]);
                } else {
                    echo json_encode(["message" => "No se ha encontrado ningun registro."]);
                }
            } else {
                echo json_encode(["message" => "Debe iniciar sesion para poder eliminar un registro."]);
            }
        } catch (Exception $e) {
            echo json_encode(["error" => "Error al eliminar la película: " . $e->getMessage()]);
        }
    }
}

$filmResource = new FilmResource();

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $film_id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($film_id !== null) {
            $filmResource->showFilm($film_id);
        } else {
            $filmResource->readFilms();
        }
        break;
    case 'POST':
        $data = json_decode(file_get_contents("php://input"), true);
        $filmResource->createFilm($data);
        break;
    case 'PUT':
        $film_id = isset($_GET['id']) ? $_GET['id'] : null;
        $data = json_decode(file_get_contents("php://input"), true);
        $filmResource->updateFilm($film_id, $data);
        break;
    case 'DELETE':
        $film_id = isset($_GET['id']) ? $_GET['id'] : null;
        $filmResource->deleteFilm($film_id);
        break;
    default:
        echo json_encode(["error" => "Método no permitido"]);
}
