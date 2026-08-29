<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial Practico 1 | DWUSL</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="estilos.css?v=<?php echo time(); ?>">
</head>
<body class="bg-light">

<div class="container my-5">
    <div class="text-center mb-4">
        <img src="images/logo.png" alt="Logo ITCA Movil Solutions" class="header-logo">
        <h1 class="main-title mb-0">ITCA MOVIL SOLUTION</h1>
    </div>

    <div class="row g-4 align-items-start">
        <div class="col-lg-8">
            <div class="card mb-5 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="m-0">Calculadora de Costos de Inscripción</h4>
                </div>
                <div class="card-body">
                    <form id="formCalculadora">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Nombre del participante</label>
                                <input type="text" name="nombre" id="calcNombre" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Cantidad de talleres</label>
                                <input type="number" name="talleres" id="calcTalleres" class="form-control" min="1" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Tipo de participante</label>
                                <select name="tipo" id="calcTipo" class="form-select" required>
                                    <option value="">Selecciona</option>
                                    <option value="Estudiante">Estudiante $5</option>
                                    <option value="Docente">Docente $8</option>
                                    <option value="Profesional">Profesional $12</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex gap-2 mt-3 flex-wrap">
                            <button type="submit" class="btn btn-primary">Calcular</button>
                            <button type="button" class="btn btn-outline-secondary limpiar-formulario" data-form="formCalculadora">Limpiar</button>
                            <button type="button" class="btn btn-outline-danger limpiar-resultado" data-result="resCalculadora">Limpiar resultado</button>
                        </div>
                    </form>
                    <div id="resCalculadora" class="mt-4"></div>
                </div>
            </div>

            <div class="card mb-5 shadow-sm">
        <div class="card-header bg-success text-white">
            <h4 class="m-0">Registro de Participantes</h4>
        </div>
        <div class="card-body">
            <form id="formRegistro">
                <h5>Información Personal</h5>
                <div class="row g-3 mb-3">
                    <div class="col-md-3">
                        <input type="text" name="nombres" class="form-control" placeholder="Nombres" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="carnet" class="form-control" placeholder="Carnet" required>
                    </div>
                    <div class="col-md-3">
                        <input type="email" name="correo" class="form-control" placeholder="Correo electrónico" required>
                    </div>
                </div>

                <h5>Información Académica</h5>
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Carrera</label>
                        <select name="carrera" class="form-select" required>
                            <option value="">Selecciona</option>
                            <option value="Ingeniería en Desarrollo de Software">Ingeniería en Desarrollo de Software</option>
                            <option value="Técnico en Redes de Computadoras">Técnico en Ingeniería en Desarrollo de Software</option>
                            <option value="Ingeniería Industrial">Ingeniería Mecatronica</option>
                            <option value="Técnico en Hardware">Técnico en Gastronomía</option>
                            <option value="Licenciatura en Ciencias de la Computación">Licenciatura en Ciencias de la Computación</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label d-block">País de procedencia</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pais" value="El Salvador" checked>
                            <label class="form-check-label">El Salvador</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pais" value="Guatemala">
                            <label class="form-check-label">Guatemala</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pais" value="Honduras">
                            <label class="form-check-label">Honduras</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pais" value="Nicaragua">
                            <label class="form-check-label">Nicaragua</label>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label d-block">Áreas de interés</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="intereses[]" value="Desarrollo Web">
                            <label class="form-check-label">Desarrollo Web</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="intereses[]" value="Inteligencia Artificial">
                            <label class="form-check-label">Inteligencia Artificial</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="intereses[]" value="Ciberseguridad">
                            <label class="form-check-label">Ciberseguridad</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label d-block">Actividades recreativas</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="recreativas[]" value="Fútbol">
                            <label class="form-check-label">Fútbol</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="recreativas[]" value="Baloncesto">
                            <label class="form-check-label">Baloncesto</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="recreativas[]" value="Videojuegos">
                            <label class="form-check-label">Videojuegos</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2 flex-wrap">
                    <button type="submit" class="btn btn-success">Registrar</button>
                    <button type="button" class="btn btn-outline-secondary limpiar-formulario" data-form="formRegistro">Limpiar</button>
                    <button type="button" class="btn btn-outline-danger limpiar-resultado" data-result="resRegistro">Limpiar resultado</button>
                </div>
            </form>
            <div id="resRegistro" class="mt-4"></div>
        </div>
    </div>
        </div>

        <aside class="col-lg-4">
            <div class="card sticky-banner shadow-sm">
                <img src="images/banner.jpg" alt="Banner del evento ITCA Movil Solutions" class="banner-sidebar-img">
                <div class="card-body">
                    <h2 class="main-title mb-2" style="font-size: 1.5rem;">Evento ITCA Movil Solutions</h2>
                    <p class="mb-0">Momento clave del encuentro tecnológico, donde la innovación, la creatividad y la participación de la comunidad estudiantil se unen para celebrar una experiencia inolvidable.</p>
                </div>
            </div>
        </aside>
    </div>

    
    <div class="card mb-5 shadow-sm">
        <div class="card-header bg-dark text-white">
            <h4 class="m-0">Panel Interactivo con jQuery</h4>
        </div>
        <div class="card-body">
            <div class="mb-3 d-flex flex-wrap gap-2">
                <button id="btnOcultar" class="btn btn-outline-danger">Ocultar</button>
                <button id="btnMostrar" class="btn btn-outline-success">Mostrar</button>
                <button id="btnToggle" class="btn btn-outline-primary">Alternar</button>
                <button id="btnFadeOut" class="btn btn-outline-secondary">FadeOut</button>
                <button id="btnFadeIn" class="btn btn-outline-info">FadeIn</button>
                <button id="btnColor" class="btn btn-outline-warning">Cambiar Color</button>
                <button id="btnTamano" class="btn btn-outline-dark">Cambiar Tamaño</button>
                <button id="btnRestaurar" class="btn btn-danger">Restaurar</button>
            </div>

            <div id="panelActividad" class="card card-custom mx-auto" style="width: 22rem;">
                <div class="card-body text-center">
                    <span style="font-size: 3rem;">💻</span>
                    <h5 class="card-title mt-2">ITCA MOVIL SOLUTIONS 2026</h5>
                    <p class="card-text">Competencia intensiva de desarrollo de software durante 24 horas continuas.</p>
                    <span class="badge bg-success">Estado: Activo</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-5 shadow-sm">
        <div class="card-header bg-warning text-dark">
            <h4 class="m-0">Videos del Evento</h4>
        </div>
        <div class="card-body">
            <div class="video-grid">
                <article class="video-card portrait-video">
                    <div class="video-frame">
                        <video controls preload="metadata" playsinline poster="images/banner.jpg">
                            <source src="videos/videoEvento.mp4" type="video/mp4">
                            Tu navegador no soporta la reproducción de videos.
                        </video>
                    </div>
                    <div class="photo-card-body">
                        <h3>Ing., jurado y participantes</h3>
                        <h4>Recuerdo del evento</h4>
                        <p>Se observa al ingeniero, al jurado y a los participantes compartiendo una experiencia de innovación, entusiasmo y trabajo en equipo.</p>
                    </div>
                </article>

                <article class="video-card">
                    <div class="video-frame">
                        <video controls preload="metadata" playsinline poster="images/banner.jpg">
                            <source src="videos/expliIngeGilbert.mp4" type="video/mp4">
                            Tu navegador no soporta la reproducción de videos.
                        </video>
                    </div>
                    <div class="photo-card-body">
                        <h3>Explicación del Ing. Gilbert</h3>
                        <h4>ITCA MÓVIL SOLUTION</h4>
                        <p>El ingeniero Gilbert explica la importancia del evento, el propósito del encuentro y la visión tecnológica detrás de ITCA MÓVIL SOLUTION.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <div class="card mb-5 shadow-sm">
        <div class="card-header bg-info text-white">
            <h4 class="m-0">Galería del Evento</h4>
        </div>
        <div class="card-body">
            <p class="gallery-intro">Momentos clave del evento que muestran la energía, la creatividad y el entusiasmo de cada participante.</p>

            <div class="gallery-grid">
                <article class="gallery-item photo-card">
                    <img src="images/estUno.jpg" alt="Estudiantes del evento 1">
                    <div class="photo-card-body">
                        <h3>Inauguración</h3>
                        <h4>Primer encuentro</h4>
                        <p>Breve descripción del primer momento del evento, con la bienvenida de todos los participantes.</p>
                    </div>
                </article>

                <article class="gallery-item photo-card">
                    <img src="images/estDos.jpg" alt="Estudiantes del evento 2">
                    <div class="photo-card-body">
                        <h3>Trabajo en equipo</h3>
                        <h4>Colaboración</h4>
                        <p>Se refleja la creatividad y el apoyo mutuo entre estudiantes durante la jornada de desarrollo.</p>
                    </div>
                </article>

                <article class="gallery-item photo-card">
                    <img src="images/estTres.jpg" alt="Estudiantes del evento 3">
                    <div class="photo-card-body">
                        <h3>Desarrollo</h3>
                        <h4>Innovación</h4>
                        <p>Un instante de dedicación mientras los participantes ponen en práctica nuevas ideas y soluciones.</p>
                    </div>
                </article>

                <article class="gallery-item photo-card">
                    <img src="images/estCuatro.jpg" alt="Estudiantes del evento 4">
                    <div class="photo-card-body">
                        <h3>Conexión</h3>
                        <h4>Comunidad</h4>
                        <p>La participación activa de cada persona muestra el sentido de pertenencia y la energía del evento.</p>
                    </div>
                </article>

                <article class="gallery-item photo-card">
                    <img src="images/fotoUno.jpg" alt="Foto del evento 1">
                    <div class="photo-card-body">
                        <h3>Momento destacado</h3>
                        <h4>Evento social</h4>
                        <p>Un recuerdo clave del ambiente dinámico y motivador que caracterizó la experiencia.</p>
                    </div>
                </article>

                <article class="gallery-item photo-card">
                    <img src="images/fotoDos.jpg" alt="Foto del evento 2">
                    <div class="photo-card-body">
                        <h3>Cierre</h3>
                        <h4>Celebración</h4>
                        <p>El evento culmina con entusiasmo, satisfacción y la sensación de haber vivido algo memorable.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>

<footer class="site-footer mt-5">
    <div class="container">
        <div class="row align-items-center gy-3">
            <div class="col-lg-5">
                <div class="footer-info">
                    <p class="footer-name">JONATHAN VLADIMIR ASCENCIO RAMOS <span>• 021523</span></p>
                    <p class="footer-name">RUTH ABIGAIL VAQUERANO MELARA <span>• 030723</span></p>
                    <p class="footer-name">GISELA NICOLE VALLADARES POLANCO <span>• 062523</span></p>

                </div>
            </div>

            <div class="col-lg-2 text-center">
                <div class="social-links" aria-label="Redes sociales">
                    <a href="#" class="social-link" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-link" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-link" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>

            <div class="col-lg-5 text-lg-end">
                <div class="footer-meta">
                    <p><?php echo date('d/m/Y'); ?></p>
                    <p>PARCIAL PRACTICO 1 DE DESARROLLO WEB USANDO SOFTWARE LIBRE</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {

    // Calculadora de Costos de Inscripción
    $('#formCalculadora').on('submit', function(e) {
        e.preventDefault();
        
        if ($('#calcNombre').val() === '' || $('#calcTalleres').val() === '' || $('#calcTipo').val() === '') {
            alert('Por favor complete todos los campos.');
            return;
        }

        $.ajax({
            url: 'procesar_calculadora.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#resCalculadora').html(response);
            }
        });
    });

    // Registro de Participantes
    $('#formRegistro').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: 'procesar_registro.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#resRegistro').html(response);
            }
        });
    });

    $('.limpiar-formulario').on('click', function() {
        var formId = $(this).data('form');
        var $form = $('#' + formId);

        $form[0].reset();

        $form.find('input[type="checkbox"]').prop('checked', false);
        $form.find('input[type="radio"]').prop('checked', false);
        $form.find('select').prop('selectedIndex', 0);

        if ($form.find('input[name="pais"]').length) {
            $form.find('input[name="pais"][value="El Salvador"]').prop('checked', true);
        }

        $form.find('.is-invalid, .is-valid').removeClass('is-invalid is-valid');
    });

    $('.limpiar-resultado').on('click', function() {
        var resultId = $(this).data('result');
        $('#' + resultId).empty();
    });

    // Panel Interactivo con jQuery
    var $panel = $('#panelActividad');

    $('#btnOcultar').click(function() { 
        $panel.hide(); 
    });

    $('#btnMostrar').click(function() { 
        $panel.show(); 
    });
    
    $('#btnToggle').click(function() { 
        $panel.toggle(); 
    });
    
    $('#btnFadeOut').click(function() { 
        $panel.fadeOut(); 
    });
    
    $('#btnFadeIn').click(function() { 
        $panel.fadeIn(); 
    });
    
    $('#btnColor').click(function() {
        $panel.css('background-color', '#d1e7dd');
    });

    $('#btnTamano').click(function() {
        $panel.css('width', '30rem');
    });

    $('#btnRestaurar').click(function() {
        $panel.show().css({
            'background-color': '#ffffff',
            'width': '22rem'
        });
    });

});
</script>
</body>
</html>