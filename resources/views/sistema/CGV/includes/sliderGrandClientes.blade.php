<div class="container text-center text" style="color:#b8860b; 
padding-bottom: 1%; 
padding-top: 1%;">

    <h2>Algunos de nuestros clientes</h2>

</div>
<div style="padding-bottom: 2%">
    {{-- SliderAliados (Buscar en el css tal cual se muestra antes del parentesis) --}}
    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src={{ asset('img/carbon.jpg') }} class="img-slider" alt="logo San Carbon" />
            </div>
            <div class="slide">
                <img src={{ asset('img/pampa.png') }} class="img-slider" alt="logo carnes la pampa" />
            </div>
            <div class="slide">
                <img src={{ asset('img/jac.jpg') }} class="img-slider" alt="logo jac producciones" style="padding-top: 8%"/>
            </div>
            <div class="slide">
                <img src={{ asset('img/oxivital.png') }} class="img-slider" alt="logo oxivital" />
            </div>
            <div class="slide">
                <img src={{ asset('img/lima.png') }} class="img-slider" alt="logo cultivos lima" />
            </div>
            <div class="slide">
                <img src={{ asset('img/finito.jpg') }} class="img-slider" alt="logo finito apartamentos" style="padding-top: 2%" />
            </div>
            <div class="slide">
                <img src={{ asset('img/renos.png') }} class="img-slider" alt="logo bolsos reno" />
            </div>
            <div class="slide">
                <img src={{ asset('img/chava.jpg') }} class="img-slider" alt="logo chava" />
            </div>

        </div>
    </div>
    <div class="btnClientes">

        <a href="{{ route('nosotros') }}#pe" class="btn btn-warning">¿Que dicen nuestros Clientes?</a>


    </div>
</div>
