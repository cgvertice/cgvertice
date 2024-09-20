<!-- resources/views/includes/back-to-top.blade.php -->
<button onclick="topFunction()" id="backToTopBtn" class="btn btn-warning">
    <i class="fas fa-arrow-up"></i>
</button>

<script>
    // Mostrar el botón cuando el usuario hace scroll hacia abajo 20px desde la parte superior
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        const btn = document.getElementById("backToTopBtn");
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            btn.style.display = "block";
        } else {
            btn.style.display = "none";
        }
    }

    // Cuando el usuario haga clic en el botón, desplazarse hasta la parte superior de la página
    function topFunction() {
        document.body.scrollTop = 0; // Para Safari
        document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
    }
</script>
