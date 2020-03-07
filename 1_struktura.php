<!DOCTYPE html>
<html land="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        echo "text<br>";
        $name="Janusz";
        $surname="Kowalski";

        echo $name." ".$surname,"<br>";
        echo $name." ".$surname,"<br>";

        echo "$name $surname";
        echo '$name $surname';

        //heredoc
        echo <<<show
        <hr>
        Imię: $name<br>
        Nazwisko: $surname
        <hr>
show;
$text= <<<show
<hr>
Imię: $name<br>
Nazwisko: $surname
<hr>
show;
echo $text;
        ?>
        </body>
</html>