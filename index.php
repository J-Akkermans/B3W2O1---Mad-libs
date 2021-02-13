<?php include 'header.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>

</head>

<?php
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
<body>
    <main>
        <h1>Mad Libs</h1>
        <section class="wrapper">
            <?= $nav ?>
            <h2>Onkude</h2>
            <section>
                <form action="">
                    <!-- 1 -->
                    <label for="1">Wat zou je graag willen kunnen?</label>
                    <input type="text" id="1" name="1">
                    <!-- 2 -->
                    <label for="2">Met welke persoon kun je goed opschieten</label>
                    <input type="text" id="2" name="2">
                    <!-- 3 -->
                    <label for="3">Wat is je favoriete getal?</label>
                    <input type="text" id="3" name="3">
                    <!-- 4 -->
                    <label for="4">Wat heb je altijd bij je als je op vakantie gaat?</label>
                    <input type="text" id="4" name="4">
                    <!-- 5 -->
                    <label for="5">Wat is je beste persoonlijke eigenschap?</label>
                    <input type="text" id="5" name="5">
                    <!-- 6 -->
                    <label for="6">Wat is je slechtste persoonlijke eigenschap</label>
                    <input type="text" id="6" name="6">
                    <!-- 7 -->
                    <label for="7">Wat is het ergste dat je kan overkomen?</label>
                    <input type="text" id="6" name="7">
                    <!-- button -->
                    <div class="submit">
                    <input type="submit" value="Versturen">
                    </div>
                </form>
                <?= $end ?>
            </section>

    </main>


</body>

</html>