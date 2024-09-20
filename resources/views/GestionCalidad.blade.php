<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corporate Group Vértice</title>
    @include('sistema.CGV.includes.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="shortcut icon" href="../img/LogoAgosto.png" type="image/x-icon" />
    <link rel="stylesheet" href="/public/css/style.css">
</head>
@include('sistema.CGV.includes.NewNavbar')

<body>
    <section class="section-aboutx">
        <div class="content-GC">
            @include('sistema.CGV.includes.tabGestionCalidad')
        </div>
    </section>
    <br>
    <br>
    @include('sistema.CGV.includes.boton')
    @include('sistema.CGV.includes.footer')
    @include('sistema.CGV.includes.botonWhatsapp')
    @include('sistema.CGV.includes.regresarArriba')
</body>
</html>