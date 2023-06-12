<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./styless.css">
    <title>Refrigeracion Raymondi</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#inicio">REFRIGERACIÓN RAYMONDI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon navbar-dark"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="homeBackground" id="inicio">
        <div class="element" style="display: flex; flex-direction: column; align-items: flex-start;"></div>
        <div class="arrow-down">
            <div class="left"></div>
            <div class="right"></div>
        </div>
    </div>

    <div class="nosotros-container" id="nosotros">

        <div class="nosotros">
            <div class="informacion">
                <h3>Nosotros</h3>
                <p>Somos una empresa que nació hace 30 años en el partido de Vicente López para luego migrar a Del Viso, Zona Norte y convertirse en una de las empresas lideres en la zona.</p>
                <p> A lo largo de nuestra trayectoría realizamos trabajos como sistemas de refrigeración central a barcos para la Naval Argentina, multiples camaras frigorificas en varios lados del país todo esto sin frenar con trabajos tanto familiares (de casa) como comerciales.</p>
            </div>
            <div class="photo"></div>
        </div>

        <div class="nosotros">
            <div class="photo2"></div>
            <div class="informacion">
                <h3></h3>
                <p>Somos una empresa que nació hace 30 años en el partido de Saavedra para luego migrar a Del Viso, Zona Norte </p>
                <p></p>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('.element', {
            strings: ['<h3 style="color: white; font-size:40px; font-weight: 600;">REFRIGERACIÓN RAYMONDI</h3> <h3>REPARACIÓN</h3> <h3>MANTENIMIENTO</h3> <h3>E INSTALACIÓN.</h3> <h4>Del Viso, Pilar, Buenos Aires.</h4>'],
            typeSpeed: 30,
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>