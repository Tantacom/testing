<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Calculator testing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<?php require 'vendor/autoload.php' ?>
<?php ini_set('display_errors', 1); ?>
<?php $calculator = new \Tanta\Calculator(); ?>
<body>
<div class="calculator">
    <h1>Calculadora de Tanta</h1>
    <?php if (isset($_POST['button'])) :?>
        <p>Aquí sale el resultado</p>
    <?php endif ?>
    <form id="calculator" method="post">
        <label>
            <input type="text" name="op1" size="3"/>
        </label>
        <label>
            <select name="op">
                <option value="1">+</option>
            </select>
        </label>
        <label>
            <input type="text" name="op2" size="3"/>
        </label>
        <input type="submit" value="Operar" name="button">
    </form>
</div>
</body>
</html>
