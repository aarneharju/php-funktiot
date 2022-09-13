<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php
    
        function printStyles() {
            echo "<style>";
            echo ".valkoinen {background-color: white; width: 300px; height: 300px; outline: 1px solid black;}
.musta {background-color: black; width: 300px; height: 300px; color: white;}";
            echo "</style>";
            
        }
    
        printStyles();
    ?>

</head>
<body>
    <div class="valkoinen">Valkoinen</div>
    <div class="musta">Musta</div>
</body>
</html>