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
$errorText = "Zorg ervoor dat dit veld correct is ingevuld.";
$err = array("", "", "", "", "", "", "");
$check = array(false, false, false, false, false, false, false);
$items = array();
$verified = false;
$story = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $test = $_POST['checkArr'];
    $counter = 0;
    foreach ($test as $username) {
        if (empty($username)) {
            $items[$counter] = validate($username);
            $check[$counter] = true;
        }
        $counter++;
    }
    if ((count(array_unique($check)) === 1) and in_array(true, $check, true) === false) {
        $verified = true;
        $story = "<p>Er zijn veel mensen die niet kunnen $test[0]. Neem nou $test[1]. Zelfs met de hulp
        van een $test[3]  of zelfs $test[2]  kan $test[1]  niet $test[0]. Dat heeft niet te maken met
        een gebrek aan $test[4], maar met een te veel aan $test[5]. Te veel $test[5]
        leidt tot $test[6] en dat is niet goed als je wilt $test[0]. Helaas voor $test[1].</p>";
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
                    <label for=" 1">Wat zou je graag willen kunnen?</label>
                    <input type="text" id="1" name="checkArr[0]">
                    <!-- 1 -->
                    <span class="error"><?= $err[1] ?></span>
                    <label for="2">Met welke persoon kun je goed opschieten</label>
                    <input type="text" id="2" name="checkArr[1]">
                    <!-- 2 -->
                    <span class="error"><?= $err[2] ?></span>
                    <label for="3">Wat is je favoriete getal?</label>
                    <input type="text" id="3" name="checkArr[2]">
                    <!-- 3 -->
                    <span class="error"><?= $err[3] ?></span>
                    <label for="4">Wat heb je altijd bij je als je op vakantie gaat?</label>
                    <input type="text" id="4" name="checkArr[3]">
                    <!-- 4 -->
                    <span class="error"><?= $err[4] ?></span>
                    <label for="5">Wat is je beste persoonlijke eigenschap?</label>
                    <input type="text" id="5" name="checkArr[4]">
                    <!-- 5 -->
                    <span class="error"><?= $err[5] ?></span>
                    <label for="6">Wat is je slechtste persoonlijke eigenschap</label>
                    <input type="text" id="6" name="checkArr[5]">
                    <!-- 6 -->
                    <span class="error"><?= $err[6] ?></span>
                    <label for="7">Wat is het ergste dat je kan overkomen?</label>
                    <input type="text" id="7" name="checkArr[6]">
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