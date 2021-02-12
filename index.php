<?php include 'header.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>

</head>
<body>
<main>
    <h1>Mad Libs</h1>
    <section class="wrapper">
    <?= $nav ?>
        <h2>Onkude</h2>
        <section>
            <form action="">
                <div>
                    <label for="1">Wat zou je graag willen kunnen?</label>
                    <input type="text" id="1">
                </div>
                <div>
                    <label for="2">Met welke persoon kune je goed opschieten?</label>
                    <input type="text" id="2">
                </div>
                <div>
                    <label for="3">Wat is je favoriete getal?</label>
                    <input type="text" id="3">
                </div>
                <div>
                    <label for="4">Wat heb je altidj bij je als je opvakantie gaat? </label>
                    <input type="text" id="4">
                </div>
                <div>
                    <label for="5">Wat zou je graag willen kunnen?</label>
                    <input type="text" id="5">
                </div>
                <div>
                    <label for="6">Wat zou je graag willen kunnen?</label>
                    <input type="text" id="6">
                </div>
                <div>
                    <label for="7">Wat zou je graag willen kunnen?</label>
                    <input type="text" id="7">
                </div>
                <div>
                    <input type="submit" value="Versturen">
                </div>

            </form>
        </section>

    <?=$end ?>
    </section>

</main>



</body>
</html>

