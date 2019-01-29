<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATM CARD CHECK</title>
    <link rel="stylesheet" href="404dev.css">
</head>
<body>
<h2 class="center">ATM CARD VALIDATOR</h2>
<div class="container">
    <div id="status" class="type"></div>
    <form id="form" action="atm.php" method="GET">
<input id="cardno" type="text" name="atm" placeholder="ATM DIGITS">
<button class="btn-success" type="submit" name="submit">CHECK</button>
    </form>
</div>
<script src="jquery-2.1.4.min.js"></script>
    <script src="ajax.js"></script>
</body>
</html>