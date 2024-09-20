<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ips Gerencial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/LogoAgosto.png" type="image/x-icon" />
    
    <link rel="stylesheet" href="/public/css/style.css">

    @include('sistema.CGV.includes.head')
    

</head>
<body>
    @include('sistema.CGV.includes.NewNavbar')
<section class="section-aboutips">
        <div class="content-Conózcanos">
         @include('sistema.CGV.includes.tabsIpsGerencial')
        </div>
    </section>
    <!-- include para traer el navbar -->
    
   
    @include('sistema.CGV.includes.boton')
    @include('sistema.CGV.includes.botonWhatsapp')
    @include('sistema.CGV.includes.regresarArriba')

    
    @include('sistema.CGV.includes.footer')
    <script src={{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+UnLr38vI1pIbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    
    
</body>
</html>
