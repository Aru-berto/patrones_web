<!DOCTYPE html>
<?php include('buis/sesion.php'); ?>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheLanguageTable</title>
    <style>
        /* Estilos CSS para la página */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
            align-content: center;
        }

        h2 {
    padding: -50%;
    font-size: 20px; 
}

fieldset{
    margin-top: 4px;
    border-top-color: var(--text);
    border-bottom-color: transparent;
    border-right-color: transparent;
    border-left-color: transparent;
    margin-right: 20px
}

        header {
            background-color: #333;
            color: white;
            padding: 20px;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
        }

        nav a:hover {
            color: red;
        }
        .banner {
            background-image: url('tu_imagen_banner.jpg');
            background-size: cover;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            align-content: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
            text-transform: uppercase;
        }
        td {
            color: #444;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>