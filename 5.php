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
            echo ".valkoinen {background-color: white; width: 30px; height: 30px;}
.musta {background-color: black; width: 30px; height: 30px; color: white;}
body {background-color: pink;}";
            echo "</style>";
            
        }
    
        printStyles();
    ?>
</head>
<body>
    <table>
        
        <?php
    
            for($rivi = 0; $rivi < 8; $rivi++) {
                echo "<tr>";
                for($sarake = 0; $sarake < 8; $sarake++) {
                    // tulosta parillisten rivien parilliset solut ja parittomien rivien parittomat solut valkoisiksi, muut mustiksi
                    if ($rivi % 2 === 0) {
                        $sarake % 2 === 0 ? print '<td class="valkoinen">' : print '<td class="musta">';
                    } else {
                        $sarake % 2 === 0 ? print '<td class="musta">' : print '<td class="valkoinen">';

                    }
                }
                echo "</tr>";
            }
        
        ?>
    </table>
    
</body>
</html>