<?php

$djs = file("djs.csv", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$generos = [
    "Electrónica",
    "Reggaetón",
    "Banda",
    "Cumbia",
    "Hip Hop",
    "Salsa",
    "Rock"
];

$animadores = [
    "Animador 1",
    "Animador 2",
    "Animador 3"
];

if (isset($_POST['sortear']) && count($djs) > 0) {

    $dj_sorteado = $djs[array_rand($djs)];
    $genero_sorteado = $generos[array_rand($generos)];
    $animador_sorteado = $animadores[array_rand($animadores)];

    echo "<h2>🎉 Resultado del Sorteo 🎉</h2>";
    echo "<strong>DJ:</strong> $dj_sorteado <br>";
    echo "<strong>Género:</strong> $genero_sorteado <br>";
    echo "<strong>Animador:</strong> $animador_sorteado <br><br>";
}

?>

<form method="POST">
    <button type="submit" name="sortear">🎰 Realizar Sorteo</button>
</form>

<br><br>
<a href="registro.html">Volver al Registro</a>