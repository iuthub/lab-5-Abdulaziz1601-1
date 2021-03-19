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

    <h1 class="sucker__title">Thanks, sucker</h1>

    <p>Your information has been recorded</p>

    <dt>Name</dt>
    <dd>
        <?= $_REQUEST['name'] ?>
    </dd>

    <dt>Section</dt>
    <dd>
        <?= $_REQUEST['section'] ?>
    </dd>

    <dt>Credit Card</dt>
    <dd>
        <?= $_REQUEST['creditCard'] ?>
<!--        --><?php //foreach ($_REQUEST['card'] as $item) { ?>
<!--            (--><?//= $item ?><!--)-->
<!--        --><?php //} ?>
    </dd>
    <p>Here are all the suckers who submitted here</p>
    <?php
    $file = "";
    $file .= "{$_REQUEST['name']};  {$_REQUEST['section']};  {$_REQUEST['creditCard']};";
    file_put_contents("sucker.txt", $file);
    $file = file_get_contents("sucker.txt");
    ?>
    <pre>
    <?=$file?>
    </pre>
</body>
</html>
