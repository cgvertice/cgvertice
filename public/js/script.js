const { Alert } = require("bootstrap");

// Crear una cookie llamada "miCookie" con valor "miValor" que expira en 30 días, es segura y tiene SameSite=None
function crearCookie() {
  const fechaExpiracion = new Date(Date.now() + 30 * 24 * 60 * 60 * 1000); // Expira en 30 días
  const opciones = {
    expires: fechaExpiracion.toUTCString(),
    sameSite: "None",
    secure: true,
  };

  document.cookie =
    "miCookie=miValor;" +
    "expires=" +
    opciones.expires +
    ";" +
    "sameSite=" +
    opciones.sameSite +
    ";" +
    "secure=" +
    opciones.secure +
    ";";
}

// Leer el valor de la cookie "miCookie"
function leerCookie() {
  function getCookieValue(cookieName) {
    const cookies = document.cookie.split("; ");
    for (const cookie of cookies) {
      const [name, value] = cookie.split("=");
      if (name === cookieName) {
        return value;
      }
    }
    return null; // La cookie no fue encontrada
  }

  const valorCookie = getCookieValue("miCookie");
  if (valorCookie) {
    console.log("Valor de la cookie miCookie:", valorCookie);
  } else {
    console.log("La cookie miCookie no se encontró.");
  }
}

// Borrar la cookie "miCookie"
function borrarCookie() {
  document.cookie =
    "miCookie=; expires=Thu, 01 Jan 1970 00:00:00 UTC; sameSite=None; secure";
}

// Ejemplos de uso:
crearCookie(); // Crea la cookie
leerCookie(); // Lee el valor de la cookie
borrarCookie(); // Borra la cookie

$(document).ready(function () {
  $(".autoWidth").lightSlider({
    autoWidth: true,
    loop: true,
    onSliderLoad: function () {
      $(".autoWidth").removeClass("cS-hidden");
    },
  });
});

document.addEventListener('DOMContentLoaded', function () {
  const slider = document.querySelector('.autoWidth');
  const slides = slider.querySelectorAll('li');
  const totalSlides = slides.length;
  let currentSlide = 0;
  const slidesToShow = 6; // Número de productos a mostrar en el slider

  // Mostrar los primeros 'slidesToShow' slides
  for (let i = 0; i < slidesToShow && i < totalSlides; i++) {
      slides[i].classList.add('cs-visible');
  }

  function nextSlide() {
      if (currentSlide + slidesToShow < totalSlides) {
          slides[currentSlide].classList.remove('cs-visible');
          currentSlide++;
          slides[currentSlide + slidesToShow - 1].classList.add('cs-visible');
          slider.style.transform = `translateX(-${currentSlide * (100 / slidesToShow)}%)`;
      }
  }

  function prevSlide() {
      if (currentSlide > 0) {
          slides[currentSlide + slidesToShow - 1].classList.remove('cs-visible');
          currentSlide--;
          slides[currentSlide].classList.add('cs-visible');
          slider.style.transform = `translateX(-${currentSlide * (100 / slidesToShow)}%)`;
      }
  }

});


$(document).ready(function () {
  //responsive menu toggle
  $("#menutoggle").click(function () {
    $(".xs-menu").toggleClass("displaynone");
  });
  //add active class on menu
  $("ul li").click(function (e) {
    e.preventDefault();
    $("li").removeClass("active");
    $(this).addClass("active");
  });
  //drop down menu
  $(".drop-down").hover(function () {
    $(".mega-menu").addClass("display-on");
  });
  $(".drop-down").mouseleave(function () {
    $(".mega-menu").removeClass("display-on");
  });
});

// Función para el efecto de máquina de escribir
function typeEffect(element, speed) {
  let text = element.innerHTML;
  element.innerHTML = "";

  // Si el elemento es el título, oculta el "I"
  if (element.id === "animated-title") {
    $("#start-i").css("display", "none");
  }

  let i = 0;
  let timer = setInterval(function () {
    if (i < text.length) {
      element.innerHTML += text.charAt(i);
      i++;
    } else {
      clearInterval(timer);
    }
  }, speed);
}

// Llama a la función cuando se carga la página
$(document).ready(function () {
  let title = document.getElementById("animated-title");
  let text = document.getElementById("typed-text");
  if (title && text) {
    typeEffect(title, 50); // 50 es la velocidad de escritura en milisegundos
    typeEffect(text, 50); // 50 es la velocidad de escritura en milisegundos
  }
});

// <!-- Agregar el siguiente script al final del body o en la sección de scripts -->