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

<?php
$errorText = "Zorg ervoor dat het onderstaande veld correct is ingevuld. ";
$err = array("", "", "", "", "", "", "", "");
$check = array(false, false, false, false, false, false, false, false);
$items = array();
$verified = false;
$story = "";
$accolade = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $test = $_POST['checkArr'];
    $counter = 0;
    foreach ($test as $username) {
        if (empty($username)) {
            print_r($username);
            $items[$counter] = validate($username);
            $check[$counter] = true;

        }
        $counter++;
    }
    if ((count(array_unique($check)) === 1) and in_array(true, $check, true) === false) {
        $verified = true;

        $story = "<p>Er heerst paniek in het koninkrijk $test[2]. Koning $test[5] is ten einde raad en als koning.
                    $test[5] ten einde raad is, radn roept hij ten-einde-raadsheer $test[1].
                    \"$test[1] Het is een ramp. Het is een schande!\"
                    \"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?\"
                    \"Mijn $test[0] is verdwenen! Zo maar, zonder waarschuwing. En ik had net $test[4] voor hem
                    gekocht!\"
                    \"Majesteit, uw $test[0] komt vast vanzelf weer terug\"
                    \"Ja, das leuk en aardig, maar hoe moet ik in de tussentijd $test[7] leren?\"
                    \"Maar Sire, daar kunt u toch uw $test[6] voor gebruiken.\"
                    \"$test[1], je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.\"
                    \"$test[3], Sire.\"
                    </p>";
    } else {
        if ($check[0]) {
            $err[0] = $errorText;
        }
        if ($check[1]) {
            $err[1] = $errorText;
        }
        if ($check[2]) {
            $err[2] = $errorText;
        }
        if ($check[3]) {
            $err[3] = $errorText;
        }
        if ($check[4]) {
            $err[4] = $errorText;
        }
        if ($check[5]) {
            $err[5] = $errorText;
        }
        if ($check[6]) {
            $err[6] = $errorText;
        }
        if ($check[7]) {
            $err[7] = $errorText;
        }
    }
}
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
            <?php
            echo $story;
            if (!$verified) { ?>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <span class="error"><?= $err[0] ?></span>
                    <label for=" 1">Welk dier zou je nooit als huisdier willen hebben?</label>
                    <input type="text" id="1" name="checkArr[0]">
                    <!-- 1 -->
                    <span class="error"><?= $err[1] ?></span>
                    <label for="2">Wie is de belangrijkste persoon in je leven?</label>
                    <input type="text" id="2" name="checkArr[1]">
                    <!-- 2 -->
                    <span class="error"><?= $err[2] ?></span>
                    <label for="3">In welk land zou je graag willen wonen?</label>
                    <input type="text" id="3" name="checkArr[2]">
                    <!-- 3 -->
                    <span class="error"><?= $err[3] ?></span>
                    <label for="4">Wat doe je als je je verveelt?</label>
                    <input type="text" id="4" name="checkArr[3]">
                    <!-- 4 -->
                    <span class="error"><?= $err[4] ?></span>
                    <label for="5">Met welk speelgoed speelde je als kind het meest?</label>
                    <input type="text" id="5" name="checkArr[4]">
                    <!-- 5 -->
                    <span class="error"><?= $err[5] ?></span>
                    <label for="6">Bij welke docent spijbel je het liefst?</label>
                    <input type="text" id="6" name="checkArr[5]">
                    <!-- 6 -->
                    <span class="error"><?= $err[6] ?></span>
                    <label for="7">Als je € 100.00,- had, wat zou je dan kopen?</label>
                    <input type="text" id="7" name="checkArr[6]">
                    <!-- 7-->
                    <span class="error"><?= $err[7] ?></span>
                    <label for="8">Wat is je favoriete bezigheid?</label>
                    <input type="text" id="8" name="checkArr[7]">
                    <!-- button -->
                    <div class="submit">
                        <input type="submit" value="Versturen">
                    </div>
                </form>
            <?php } ?>
            <?= $end ?>
        </section>

</main>


</body>

</html>