<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombres = htmlspecialchars($_POST['nombres'] ?? '');
    $apellidos = htmlspecialchars($_POST['apellidos'] ?? '');
    $carnet = htmlspecialchars($_POST['carnet'] ?? '');
    $correo = htmlspecialchars($_POST['correo'] ?? '');
    $carrera = htmlspecialchars($_POST['carrera'] ?? '');
    $pais = htmlspecialchars($_POST['pais'] ?? '');

    // Procesar los Checkboxes para obtener intereses y recreativas del participante
    $intereses = isset($_POST['intereses']) ? $_POST['intereses'] : [];
    $recreativas = isset($_POST['recreativas']) ? $_POST['recreativas'] : [];

    $strIntereses = !empty($intereses) ? implode(", ", array_map('htmlspecialchars', $intereses)) : 'Ninguno';
    $strRecreativas = !empty($recreativas) ? implode(", ", array_map('htmlspecialchars', $recreativas)) : 'Ninguna';

    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>¡Registro exitoso!</strong> El participante ha sido guardado correctamente en el sistema.
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered mt-2">
            <thead class="table-dark">
                <tr>
                    <th>Campo</th>
                    <th>Detalle</th>
                </tr>
            </thead>
            <tbody>
                <tr><td><strong>Nombre Completo</strong></td><td>' . $nombres . ' ' . $apellidos . '</td></tr>
                <tr><td><strong>Carnet</strong></td><td>' . $carnet . '</td></tr>
                <tr><td><strong>Correo Electrónico</strong></td><td>' . $correo . '</td></tr>
                <tr><td><strong>Carrera</strong></td><td>' . $carrera . '</td></tr>
                <tr><td><strong>País de Procedencia</strong></td><td>' . $pais . '</td></tr>
                <tr><td><strong>Áreas de Interés</strong></td><td>' . $strIntereses . '</td></tr>
                <tr><td><strong>Actividades Recreativas</strong></td><td>' . $strRecreativas . '</td></tr>
            </tbody>
        </table>
    </div>';
}
?>