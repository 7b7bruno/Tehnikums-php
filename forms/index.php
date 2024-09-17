<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Forms</h1>

        <?php
            echo "text from php";
            echo '<input type="text" id="title" name="title">';
            $someText = "some text";
            echo $someText;
            $date = date('m/d/Y h:i:s a', time());
            echo $date;
        ?>

        <form action="home.php" method="get">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
            <br>
            <label for="textarea">Content:</label>
            <textarea name="content" id="textarea"></textarea>
            <br>
            <input type="radio" id="carrot" name="vegetables" value="carrot" checked>
            <label for="carrot">Carrot</label>
            <input type="radio" id="lettuce" name="vegetables" value="lettuce">
            <label for="lettuce">Lettuce</label>
            <br>
            <label for="snacks">Snacks:</label>
            <select name="snacks" id="snacks">
                <option value="chocolate">Chocolate</option>
                <option value="lollipop">Lollipop</option>
                <option value="icecream">Ice cream</option>
                <option value="crisps">Crisps</option>
            </select>
            <input type="submit" value="submit">
        </form>
    </body>
</html>