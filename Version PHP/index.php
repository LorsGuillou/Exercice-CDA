<?php 
require_once "song/Song.php";
$song = new Song();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Test CDA</title>
</head>

<body>
    <main>
        <h1>99 bolées de cidre sur le mur (édition PHP)</h1>
        <form id="formbox" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
            <p>
                <label for="number">Rentrez ici un nombre entier entre 0 et 99 !</label>
            </p>
            <p>
                <input id="number" name="number" type="number" min="0" max="99" value="<?= htmlspecialchars($_POST['number']) ?>">
            </p>
            <p>
                <button id="button" type="submit">Jouer la chanson !</button>
            </p>
        </div>
        <div id="songbox">
            <?php $song->playSong() ?>
        </div>
    </main>
</body>

</html>