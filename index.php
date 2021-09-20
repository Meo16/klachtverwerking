<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="./mailer/mailer.php" method="post">
    <label for="name">Naam</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">email:</label><br>
    <input type="email" id="email" name="email"><br><br>
    <label for="text">Omschrijving</label><br>
    <textarea type="text" id="omschrijving" name="omschrijving"></textarea><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>