<!--formpost maken met wachtwoord beveiliging.-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPForm!</title>
</head>
<body>
    <h1>De PHP Form!</h1>
<!--    title, message-->
    <form action="oefeningForms-resultaat.php" method="post">
        <label for="title">Titel</label>
        <input type="text" name="title" placeholder="Titel">
        <br>
        <label for="message">Bericht</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <!-- password, how many times the message has to appear-->
        <br>
        <label for="password">Wachtwoord</label>
        <input type="password" name="password">
        <br>
        <label for="amount">Aantal</label>
        <input type="number" name="amount">
        <button type="submit">Verzend</button>

    </form>

</body>
</html>