<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $talleres = intval($_POST['talleres'] ?? 0);
    $tipo = $_POST['tipo'] ?? '';

    // Se valida que no se envie el formulario si los datos son incorrectos
    if (empty($nombre) || $talleres <= 0 || empty($tipo)) {
        echo '<div class="alert alert-danger">Error: Todos los campos son obligatorios y válidos.</div>';
        exit;
    }

    $costoBase = 0;

    // Manejar el tipo de participante para el evento por el costo
    switch ($tipo) {
        case 'Estudiante':
            $costoBase = 5;
            break;
        case 'Docente':
            $costoBase = 8;
            break;
        case 'Profesional':
            $costoBase = 12;
            break;
        default:
            $costoBase = 0;
            break;
    }

    $subtotal = $costoBase * $talleres;
    $iva = $subtotal * 0.13;
    $total = $subtotal + $iva;

    echo '
    <div class="alert alert-info">
        <h5 class="alert-heading">Resumen de Inscripción</h5>
        <p><strong>Participante:</strong> ' . htmlspecialchars($nombre) . '</p>
        <p><strong>Tipo:</strong> ' . htmlspecialchars($tipo) . '</p>
        <p><strong>Cantidad de talleres:</strong> ' . $talleres . '</p>
        <hr>
        <p class="mb-1"><strong>Subtotal:</strong> $' . number_format($subtotal, 2) . '</p>
        <p class="mb-1"><strong>IVA (13%):</strong> $' . number_format($iva, 2) . '</p>
        <h4 class="mt-2 text-primary"><strong>Total a pagar:</strong> $' . number_format($total, 2) . '</h4>
    </div>';
}
?>