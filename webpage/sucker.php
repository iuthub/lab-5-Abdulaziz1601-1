<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="buyagrade.css" type="text/css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body class="sucker">
<?php
if ((empty($_REQUEST["name"]) || empty($_REQUEST["creditCard"]) || empty($_REQUEST["section"]) || empty($_REQUEST["cardType"]))) { ?>
    <h1>Sorry</h1>
    <p>You didn't fill out the form completely. <a href="buyagrade.html">Try Again?</a></p>
<?php } else {
    $cardType = $_REQUEST['cardType'];
    $name = $_REQUEST['name'];
    $section = $_REQUEST['section'];
    $creditCard = $_REQUEST['creditCard'];
    $file = "";
    $file .= "{$name};{$section};{$creditCard};$cardType;\n";
    file_put_contents("sucker.txt", $file, FILE_APPEND);
    $file = file_get_contents("sucker.txt");
    ?>

    <h1 class="sucker__title">Thanks, sucker</h1>
    <p>Your information has been recorded</p>
    <dt>Name</dt>
    <dd><?= $name ?></dd>
    <dt>Section</dt>
    <dd><?= $section ?></dd>
    <dt>Credit Card</dt>
    <dd>
        <?= $creditCard ?>
        (<?= $cardType ?>)
    </dd>
    <p>Here are all the suckers who submitted here</p>
    <pre><?= $file ?></pre>

<?php } ?>
</body>
</html>
