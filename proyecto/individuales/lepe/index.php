<?php
$classification = ["G", "PG", "PG-13", "R", "NC-17"];
$characteristics = ["Trailers", "Commentaries", "Deleted Scenes", "Behind the Scenes"];
// $languages = ;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación</title>
</head>
<?php
session_start();


if (isset($_SESSION['username'])) {
    echo '<p>Bienvenido, ' . $_SESSION['username'] . '!</p>';
    echo '<a href="logout.php">Cerrar Sesión</a>';
} else {
    echo '<a href="loginForm.php">Iniciar sesión</a>';
}
?>

<body>

    <div class="container">
        <h2>Crear Nueva Película</h2>
        <form id="filmForm" class="row row-cols-4">
            <input type="hidden" id="filmId" name="filmId">
            <div class="mb-3 col">
                <label for="title" class="form-label">Título:</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>
            <div class="mb-3 col">
                <label for="description" class="form-label">Descripción:</label>
                <textarea class="form-control" name="description" id="description" required></textarea>
            </div>
            <div class="mb-3 col">
                <label for="release_year" class="form-label">Año de lanzamiento:</label>
                <input type="date" class="form-control" name="release_year" id="release_year" required>
            </div>
            <div class="mb-3 col">
                <label for="language_id" class="form-label">Idioma:</label>
                <select id="language_id" class="form-select" name="language_id"
                    aria-label="Selecciona el idioma"></select>
            </div>
            <div class="mb-3 col">
                <label for="original_language_id" class="form-label">Idioma original:</label>
                <select id="original_language_id" name="original_language_id" class="form-select"
                    aria-label="Selecciona el idioma"></select>
            </div>
            <div class="mb-3 col">
                <label for="rental_duration" class="form-label">Duración de alquiler:</label>
                <input type="number" class="form-control" name="rental_duration" id="rental_duration" required>
            </div>
            <div class="mb-3 col">
                <label for="rental_rate" class="form-label">Tarifa de alquiler:</label>
                <input type="number" step="0.01" class="form-control" name="rental_rate" id="rental_rate" required>
            </div>
            <div class="mb-3 col">
                <label for="length" class="form-label">Duración:</label>
                <input type="number" class="form-control" name="length" id="length" required>
            </div>
            <div class="mb-3 col">
                <label for="replacement_cost" class="form-label">Costo de reemplazo:</label>
                <input type="number" step="0.01" class="form-control" name="replacement_cost" id="replacement_cost"
                    required>
            </div>
            <div class="mb-3 col">
                <label for="rating" class="form-label">Clasificación:</label>
                <select class="form-select" aria-label="Clasificación" id="rating" name="rating">
                    <?php
                    foreach ($classification as $value) {
                        echo "<option value=\"$value\">$value</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3 col">
                <label for="special_features" class="form-label">Características:</label>
                <select class="form-select" aria-label="Características" id="special_features" name="special_features[]"
                    multiple>
                    <?php
                    foreach ($characteristics as $value) {
                        echo "<option value=\"$value\">$value</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="button" onclick="submitForm()" id="submitButton" class="btn btn-primary">Crear
                Película</button>
        </form>


        <h2>Listado de Películas</h2>
        <table class="table table-striped table-hover" id="filmTable">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Año de lanzamiento</th>
                <th>Acciones</th>
            </tr>
        </table>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            loadFilms();
            loadLanguages();
        });

        function loadFilms() {
            fetch("FilmResource.php", {
                method: "GET"
            })
                .then(response => response.json())
                .then(data => {
                    if (data && data.length > 0) {
                        const table = document.getElementById("filmTable");

                        data.forEach(film => {
                            const row = table.insertRow(-1);
                            row.innerHTML = `<td>${film.film_id}</td>
                                 <td>${film.title}</td>
                                 <td>${film.description}</td>
                                 <td>${film.release_year}</td>
                                 <td class="row gap-1">
                                     <button class="btn btn-info" onclick="editFilm(${film.film_id})">Editar</button>
                                     <button class="btn btn-danger" onclick="deleteFilm(${film.film_id})">Eliminar</button>
                                 </td>`;
                        });
                    }
                })
                .catch(error => console.error("Error al cargar las películas:", error));
        }

        document.getElementById("filmForm").addEventListener("submit", function (event) {
            event.preventDefault();
            submitForm();
        });

        function submitForm() {
            const formData = new FormData(document.getElementById("filmForm"));

            fetch("FilmResource.php", {
                method: "POST",
                body: JSON.stringify(Object.fromEntries(formData.entries())),
                headers: {
                    "Content-Type": "application/json"
                }
            })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    console.log(data);
                    document.getElementById("filmTable").innerHTML = "<tr><th>ID</th><th>Título</th><th>Descripción</th><th>Año de lanzamiento</th><th>Acciones</th></tr>";
                    loadFilms();
                    resetForm();
                })
                .catch(error => console.error("Error al crear la película:", error));
        }

        function editFilm(filmId) {
            console.log("Editar película con ID:", filmId);

            fetch(`FilmResource.php?id=${filmId}`, {
                method: "GET"
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    if (data && data.length > 0) {
                        const film = data;
                        document.getElementById("filmId").value = film.film_id;
                        document.getElementById("title").value = film.title;
                        document.getElementById("description").value = film.description;
                        document.getElementById("release_year").value = film.release_year;
                        document.getElementById("language_id").value = film.language_id;
                        document.getElementById("original_language_id").value = film.original_language_id;
                        document.getElementById("rental_duration").value = film.rental_duration;
                        document.getElementById("rental_rate").value = film.rental_rate;
                        document.getElementById("length").value = film.length;
                        document.getElementById("replacement_cost").value = film.replacement_cost;
                        document.getElementById("rating").value = film.rating;
                        document.getElementById("special_features").value = film.special_features;

                        document.getElementById("submitButton").innerText = "Actualizar Película";
                        document.getElementById("submitButton").setAttribute("onclick", "updateFilm()");
                    }
                })
                .catch(error => console.error("Error al cargar el film para editar:", error));
        }

        function updateFilm() {
            const formData = new FormData(document.getElementById("filmForm"));
            const filmId = formData.get("filmId");

            const updatedData = {};
            formData.forEach((value, key) => {
                updatedData[key] = value;
            });

            fetch(`FilmResource.php?id=${filmId}`, {
                method: "PUT",
                body: JSON.stringify(updatedData),
                headers: {
                    "Content-Type": "application/json"
                }
            })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    console.log(data);

                    document.getElementById("filmTable").innerHTML = "<tr><th>ID</th><th>Título</th><th>Descripción</th><th>Año de lanzamiento</th><th>Acciones</th></tr>";
                    loadFilms();
                    resetForm();
                })
                .catch(error => console.error("Error al actualizar la película:", error));
        }

        function deleteFilm(filmId) {
            const apiUrl = `FilmResource.php?id=${filmId}`;

            fetch(apiUrl, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    console.log('Respuesta del servidor:', data);
                    document.getElementById("filmTable").innerHTML = "<tr><th>ID</th><th>Título</th><th>Descripción</th><th>Año de lanzamiento</th><th>Acciones</th></tr>";
                    loadFilms();
                    resetForm();
                })
                .catch(error => {
                    alert(error.message);
                    console.error('Error al eliminar la película:', error);
                });
        }

        function resetForm() {
            document.getElementById("filmId").value = "";
            document.getElementById("title").value = "";
            document.getElementById("description").value = "";
            document.getElementById("release_year").value = "";
            document.getElementById("language_id").value = "";
            document.getElementById("original_language_id").value = "";
            document.getElementById("rental_duration").value = "";
            document.getElementById("rental_rate").value = "";
            document.getElementById("length").value = "";
            document.getElementById("replacement_cost").value = "";
            document.getElementById("rating").value = "G";
            document.getElementById("special_features").value = "";

            document.getElementById("submitButton").innerText = "Crear Película";
            document.getElementById("submitButton").setAttribute("onclick", "submitForm()");
        }

        function loadLanguages() {
            fetch('LanguageResource.php')
                .then(response => response.json())
                .then(data => {
                    if (data && data.length > 0) {
                        const select = document.getElementById('language_id');

                        select.innerHTML = '';

                        data.forEach(language => {
                            const option = document.createElement('option');
                            option.value = language.language_id;
                            option.text = language.name;
                            select.appendChild(option);
                        });

                        const select_original = document.getElementById('original_language_id');

                        select_original.innerHTML = '';

                        data.forEach(language => {
                            const option = document.createElement('option');
                            option.value = language.language_id;
                            option.text = language.name;
                            select_original.appendChild(option);
                        });
                    }
                })
                .catch(error => {
                    console.error('Error al cargar lenguajes:', error);
                });
        }
    </script>


</body>

</html>