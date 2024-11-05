<style>
    .contenedor-principal {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        min-height: 60vh;
    }

    .card {
        position: relative;
        width: 300px;
        height: 350px;
        margin: 20px;
    }

    .card .face {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 10px;
        overflow: hidden;
        transition: .5s;
    }

    .card .front {
        transform: perspective(600px) rotateY(0deg);
        box-shadow: 0 5px 10px #000;
    }

    .card .front img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card .front h3 {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 45px;
        line-height: 45px;
        color: #fff;
        background: rgba(0, 0, 0, .4);
        text-align: center;
    }

    .card .back {
        transform: perspective(600px) rotateY(180deg);
        background: #1b1b1b;
        color: #fff;
        padding: 15px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: center;
        box-shadow: 0 5px 10px #000;
    }

    .card .back .link {
        border-top: solid 1px #f3f3f3;
        height: 50px;
        line-height: 50px;
    }

    .card .back .link a {
        color: #555555;
    }

    .card .back h3 {
        font-size: 30px;
        margin-top: 20px;
        letter-spacing: 2px;
    }

    .card .back p {
        letter-spacing: 1px;
    }

    .card:hover .front {
        transform: perspective(600px) rotateY(180deg);
    }

    .card:hover .back {
        transform: perspective(600px) rotateY(360deg);
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="contenedor-principal">
        <div class="card">
            <div class="face front">
                <img src="{{ asset('img/Auditoria.jpg') }}" alt="Tarjeta promocional curso de auditoria">
                <h3>Japan</h3>
            </div>
            <div class="face back">
                <h3>Japan</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste, nihil doloribus
                    fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
                <div class="link">
                    <a href="#">Details</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face front">
                <img src="{{ asset('img/ceet.png') }}" alt="Logo de Vértice">
                <h3>Spain</h3>
            </div>
            <div class="face back">
                <h3>Spain</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste, nihil doloribus
                    fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
                <div class="link">
                    <a href="#">Details</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face front">
                <img src="{{ asset('img/ceet.png') }}" alt="Logo de Vértice">
                <h3>Spain</h3>
            </div>
            <div class="face back">
                <h3>Spain</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste, nihil doloribus
                    fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
                <div class="link">
                    <a href="#">Details</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face front">
                <img src="{{ asset('img/ceet.png') }}" alt="Logo de Vértice">
                <h3>Perú</h3>
            </div>
            <div class="face back">
                <h3>Perú</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste, nihil doloribus
                    fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
                <div class="link">
                    <a href="#">Details</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
