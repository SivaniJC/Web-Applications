<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Answer</title>
        <style>
            body{
                background-color: rgba(255, 255, 128, .5);;
            }
        </style>
    </head>
<body>
    <p>The answer is:
    <?php

        if($_POST['group1'] == 'add')
        {
            echo $_POST['first'] + $_POST['second'];
        }
        else if($_POST['group1'] == 'subtract')
        {
            echo $_POST['first'] - $_POST['second'];
        }
        else if($_POST['group1'] == 'times')
        {
            echo $_POST['first'] * $_POST['second'];
        }
        else if($_POST['group1'] == 'divide')
        {
        echo $_POST['first'] / $_POST['second'];
        }
    ?>
</p>
</body>
</html>