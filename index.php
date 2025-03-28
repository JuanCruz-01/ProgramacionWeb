<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Fondo con la imagen personalizada */
        body {
            background: url('fondo.jpg') no-repeat center center fixed;
            background-size: cover; /* Ajusta la imagen para que cubra toda la pantalla */
            color: black;
        }

        /* Para mejorar la legibilidad del contenido */
        .overlay {
            background: rgba(0, 0, 0, 0.5); /* Oscurece un poco el fondo */
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        /* Efecto en las tarjetas al pasar el mouse */
        .card {
            background: white;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <div class="overlay">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6 max-w-4xl">
            
            <!-- Tarjeta de Ejercicios -->
            <div class="card max-w-sm border border-gray-300 rounded-lg shadow-lg p-5">
                <a href="ejercicios.php">
                    <img class="rounded-t-lg" src="ejercicios.jpg" alt="Ejercicios" />
                </a>
                <div class="p-5 text-gray-800">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight">Ejercicios de PHP</h5>
                    <p class="mb-3 font-normal">Accede a los ejercicios prácticos de PHP para reforzar tus conocimientos.</p>
                    <a href="ejercicios.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                        Ver ejercicios
                        <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Tarjeta de Prácticas -->
            <div class="card max-w-sm border border-gray-300 rounded-lg shadow-lg p-5">
                <a href="practicas.php">
                    <img class="rounded-t-lg" src="practicas.jpg" alt="Prácticas" />
                </a>
                <div class="p-5 text-gray-800">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight">Lista de Prácticas</h5>
                    <p class="mb-3 font-normal">Explora la lista de prácticas para aplicar lo aprendido en proyectos más completos.</p>
                    <a href="practicas.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-green-700">
                        Ver prácticas
                        <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
