<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname">

            <button type="submit">Submit</button>
        </form>
        <?php
        include ("includes/formhandler.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo $firstname;
        }
        ?>
    </main>

</body>

</html>