<?php
function formataPeriodo($data1, $data2) {
    return "De " .  DateTime::createFromFormat('Y-m-d', $data1)->format('d/m/Y') .
        " à ". DateTime::createFromFormat('Y-m-d', $data2)->format('d/m/Y');
}

function numeroEmReais($numero) {
    return "R$ " . number_format($numero, 2, ",", ".");
}

function formataPeriodoHorario($horario1, $horario2) {
    return "De " .  DateTime::createFromFormat('H:i:s', $horario1)->format('H:i') .
        " às ". DateTime::createFromFormat('H:i:s', $horario2)->format('H:i');
}