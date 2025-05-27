<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ReceFy</title>

    <!-- Fuentes y CSS externos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <!-- Si usas Bootstrap local cambia asset por la ruta correcta,
         o usa CDN para probar que funciona bien -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Courgette&family=Lobster&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Courgette&family=Lobster&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');

        * {
            margin: 0;
            top: 0;
        }

        header {
            top: 5px;
        }

        .encabezado {
            display: flex;
            justify-content: space-between;
            /* Ajusta la distribución horizontal */
            align-items: center;
            /* Alinea los elementos verticalmente al centro */
            font-size: 3.5vw;
            /* Tamaño de fuente responsive */
            margin-top: 1rem;
            margin-bottom: 0.5rem;
            position: relative;
            /* Necesario para el posicionamiento absoluto de .pagina */
        }

        .logo {
            margin-left: 30px;
        }

        .logo h1,
        .pagina h2 {
            font-family: 'Courgette', cursive;
            font-family: 'Lobster', sans-serif;
            color: rgb(255, 255, 255);
            transition: color 0.3s ease, font-size 0.3s ease;
            text-align: center;
        }

        .pagina {
            position: absolute;
            /* Posiciona .pagina de forma absoluta */
            left: 50%;
            /* Mueve horizontalmente el centro del elemento */
            transform: translateX(-50%);
            /* Ajusta el desplazamiento para centrar */
            text-align: center;
            /* Asegura que el texto esté centrado */
        }

        .pagina h2 {
            font-size: 50px;
        }

        .logo a {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo i {
            color: white;
            margin-right: 8px;
            transition: color 0.4s ease;
        }

        .logo i:hover {
            color: #28a56b;
        }

        .slogan a {
            text-decoration: none;
        }

        .slogan h1 {
            text-decoration: none;
            margin-right: 115px;
            color: #ffffff;
            font-family: "Urbanist", sans-serif;
            font-size: 24px;
            transition: color 0.3s ease;
        }

        .logo:hover h1,
        .pagina h2:hover {
            font-size: 45px;
        }

        .slogan h1:hover {
            color: #28a56b !important;
        }

        @media (max-width: 768px) {
            .pagina {
                display: none;
                /* Oculta el elemento con clase "pagina" en dispositivos móviles */
            }

            .logo i {
                font-size: 55px;

            }
        }

        @media (max-width: 381px) {
            .slogan h1 {
                text-decoration: none;
                margin-right: 20px;
                color: white;
                font-family: "Urbanist", sans-serif;
                font-size: 24px;
                transition: color 0.3s ease;
            }

            .slogan h1:hover {
                color: #28a56b;
            }
        }


        @import url('https://fonts.googleapis.com/css2?family=Courgette&family=Lobster&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');

        footer {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
            animation: slideInUp 1s ease;
            transition: background-color 0.5s ease;
            /* Corrección de 'bacground-color' a 'background-color' */
        }

        footer h1 {
            font-family: 'Courgette', cursive;
            font-family: 'Lobster', sans-serif;
            transition: color 0.3s ease, font-size 0.3s ease;
        }

        footer h1:hover {
            color: #28a56b;
            font-size: 50px;
        }

        footer p {
            font-family: "Urbanist", sans-serif;
        }


        footer:hover {
            background-color: transparent;
        }

        footer a {
            color: white;
        }

        footer a:hover {
            color: black;
            text-decoration: none;
        }

        footer:not(:hover) {
            background-color: rgba(0, 0, 0, 0.5);
        }

        body {
            margin: auto;
            font-family: 'Roboto', -apple-system, BlinkMacSystemFont, sans-serif;
            overflow: auto;
            background: linear-gradient(315deg, rgb(255, 94, 94) 3%, rgb(179, 0, 0) 38%, rgb(197, 18, 18) 68%, rgb(122, 14, 14) 98%);
            animation: gradient 15s ease infinite;
            background-size: 400% 400%;
            background-attachment: fixed;
            color: white;
            /* Asegura que el texto sea visible */
        }

        body.trasparent {
            background: transparent;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
        }

        @keyframes gradient {
            0% {
                background-position: 0% 0%;
            }

            50% {
                background-position: 100% 100%;
            }

            100% {
                background-position: 0% 0%;
            }
        }

        .wave {
            background: rgb(255 255 255 / 25%);
            border-radius: 1000% 1000% 0 0;
            position: fixed;
            width: 200%;
            height: 12em;
            animation: wave 10s -3s linear infinite;
            transform: translate3d(0, 0, 0);
            opacity: 0.8;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        .wave:nth-of-type(2) {
            bottom: -1.25em;
            animation: wave 18s linear reverse infinite;
            opacity: 0.8;
        }

        .wave:nth-of-type(3) {
            bottom: -2.5em;
            animation: wave 20s -1s reverse infinite;
            opacity: 0.9;
        }

        @keyframes wave {
            2% {
                transform: translateX(1);
            }

            25% {
                transform: translateX(-25%);
            }

            50% {
                transform: translateX(-50%);
            }

            75% {
                transform: translateX(-25%);
            }

            100% {
                transform: translateX(1);
            }
        }

        .container {
            border-radius: 20px;
            width: 40%;
            height: 60vh;
            margin-bottom: 7vh;
            transition: background-color 0.5s ease;
            align-items: center;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }



        .contenido {
            text-align: center;
            color: white;
        }

        .contenido i {
            margin-top: 5vh;
            text-align: center;
            font-size: 80px;
            margin-bottom: 5vh;
            animation: girar 4s linear infinite;
        }

        @keyframes girar {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .contenido h1 {
            text-align: center;
            font-size: 55px;
        }

        .contenido p {
            font-family: "Urbanist", sans-serif;
            font-size: 25px;
        }

        .contenido button {
            margin-top: 2vh;
            background-color: white;
            border: 1px solid grey;
            border-radius: 25px;
            height: 35px;
            width: 135px;
            color: grey;
            font-size: 15px;
        }

        .contenido button a {
            text-decoration: none;
            color: grey;
            display: block;
            line-height: 35px;
        }

        @media (max-width: 768px) {
            .container {
                width: auto;
                height: auto;
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="encabezado">
            <div class="logo">
                <a href="/" class="back-button">
                    <i class="bi bi-arrow-left-short"></i>
                    <h1>RC</h1>
                </a>
            </div>
            <div class="pagina">
                <h2>
                    ReceFy
                </h2>
            </div>
            <div class="slogan">
                <a href="/">
                    <h1>ReceFy</h1>
                </a>
            </div>
        </div>
    </header>

    <!-- Contenido principal -->
    <main>
        <div class="container">
            <div class="contenido">
                <i class="fa-solid fa-gear"></i>
                <!-- <h1>ReceFy</h1> -->
                <h2>Error 404</h2>
                <p>¡ Este sitio no se encuentra Activo Por el Momento !</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="bordeado">
            <a href="/">
                <h1>RC</h1>
            </a>
        </div>
        <p>&copy; 2024 <b>ReceFy</b> Todos los derechos Reservados</p>
        <div class="social-icons">
            <a href="#" target="_blank">Facebook</a>
            <a href="#" target="_blank">Twitter</a>
            <a href="#" target="_blank">Instagram</a>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/SweetAlert/sweetalert2.js') }}"></script>
    <script src="{{ asset('Bootstrap/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
