<!doctype html>
<html lang="hu">
    <head>
        <title>Ellenállás</title>
        <!--
        Purpose of this exercise: We would like to determine our resistor's value.
        We use for our verification this picture: http://nearbus.net/wiki/index.php?title=File:Resistor_color_codes.jpg
        Our user have a resistor but he/she doesn't know its value. 
        So we ask the colors from the resistor in a drop down list.
        -->
        <style>
            .elvalaszt{
                border-right: 1px solid black;
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
        <p><h1>Ellenállás értékének meghatározása</h1></p>
        <!-- Determine of the resistor's value -->
        <table>
            <tr>
                <td class="elvalaszt">Első szín: </td><!-- First color: -->
                <td class="elvalaszt">Második szín:</td><!-- Second color: -->
                <td class="elvalaszt">Harmadik szín:</td><!-- Third color: -->
                <td class="elvalaszt">Negyedik szín:</td><!-- Fourth color: -->
                <td>Ötödik szín:</td><!-- Fifth color: -->
            </tr>
            <tr>
                <td class="elvalaszt">
                    <select name="Color1">
                        <option value="barna">Barna</option><!-- Brown -->
                        <option value="vörös">Vörös</option><!-- Red -->
                        <option value="narancs">Narancs</option><!-- Orange -->
                        <option value="sárga">Sárga</option><!-- Yellow -->
                        <option value="zöld">Zöld</option><!-- Green -->
                        <option value="kék">Kék</option><!-- Blue -->
                        <option value="ibolya">Ibolya</option><!-- Purple -->
                        <option value="szürke">Szürke</option><!-- Gray -->
                        <option value="fehér">Fehér</option><!-- White -->
                    </select> 
                </td>
                <td class="elvalaszt">
                    <select name="Color2">
                        <option value="fekete">Fekete</option><!-- Black -->
                        <option value="barna">Barna</option><!-- Brown-->
                        <option value="vörös">Vörös</option><!-- Red -->
                        <option value="narancs">Narancs</option><!-- Orange -->
                        <option value="sárga">Sárga</option><!-- Yellow -->
                        <option value="zöld">Zöld</option><!-- Green -->
                        <option value="kék">Kék</option><!-- Blue -->
                        <option value="ibolya">Ibolya</option><!-- Purple -->
                        <option value="szürke">Szürke</option><!-- Gray-->
                        <option value="fehér">Fehér</option><!-- White-->
                    </select> 
                </td>
                <td class="elvalaszt">
                    <select name="Color3">
                        <option value="fekete">Fekete</option><!-- Black -->
                        <option value="barna">Barna</option><!-- Brown-->
                        <option value="vörös">Vörös</option><!-- Red -->
                        <option value="narancs">Narancs</option><!-- Orange -->
                        <option value="sárga">Sárga</option><!-- Yellow -->
                        <option value="zöld">Zöld</option><!-- Green -->
                        <option value="kék">Kék</option><!-- Blue -->
                        <option value="ibolya">Ibolya</option><!-- Purple -->
                        <option value="szürke">Szürke</option><!-- Gray-->
                        <option value="fehér">Fehér</option><!-- White-->
                    </select> 
                </td>
                <td class="elvalaszt">
                    <select name="Color4">
                        <option value="ezüst">Ezüst</option><!-- Silver -->
                        <option value="arany">Arany</option><!-- Gold -->
                        <option value="fekete">Fekete</option><!-- Black-->
                        <option value="barna">Barna</option><!-- Brown -->
                        <option value="vörös">Vörös</option><!-- Red -->
                        <option value="narancs">Narancs</option><!-- Orange -->
                        <option value="sárga">Sárga</option><!-- Yellow -->
                        <option value="zöld">Zöld</option><!-- Green -->
                        <option value="kék">Kék</option><!-- Blue -->
                        <option value="ibolya">Ibolya</option><!-- Purple -->
                        <option value="szürke">Szürke</option><!-- Gray -->
                        <option value="fehér">Fehér</option><!-- White -->
                    </select> 
                </td>
                <td>
                    <select name="Color5">
                        <option value="barna">Barna</option><!-- Brown -->
                        <option value="vörös">Vörös</option><!-- Red -->
                        <option value="zöld">Zöld</option><!-- Green -->
                        <option value="kék">Kék</option><!-- Blue-->
                        <option value="ibolya">Ibolya</option><!-- Puprle -->
                    </select> 
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Számít" /></td><!-- Let's go -->
            </tr>
        </table>
        </form>
        <?php
            if(isset($_POST['submit'])){
            $selected_val1 = $_POST['Color1']; 
            $selected_val2 = $_POST['Color2'];
            $selected_val3 = $_POST['Color3'];
            $selected_val4 = $_POST['Color4'];
            $selected_val5 = $_POST['Color5'];
            switch($selected_val1){
                case 'barna':
                        $a = 1;
                    break;
                case 'vörös':
                        $a = 2;
                    break;
                case 'narancs':
                        $a = 3;
                    break;
                case 'sárga':
                        $a = 4;
                    break;
                case 'zöld':
                        $a = 5;
                    break;
                case 'kék':
                        $a = 6;
                    break;
                case 'ibolya':
                        $a = 7;
                    break;
                case 'szürke':
                        $a = 8;
                    break;
                case 'fehér':
                        $a = 9;
                    break;
                default:
                    echo "Nem választottál ki színt!"; //you haven't chosen any color
            }
            switch($selected_val2){
                case 'fekete':
                        $b = 0;
                    break;
                case 'barna':
                        $b = 1;
                    break;
                case 'vörös':
                        $b = 2;
                    break;
                case 'narancs':
                        $b = 3;
                    break;
                case 'sárga':
                        $b = 4;
                    break;
                case 'zöld':
                        $b = 5;
                    break;
                case 'kék':
                        $b = 6;
                    break;
                case 'ibolya':
                        $b = 7;
                    break;
                case 'szürke':
                        $b = 8;
                    break;
                case 'fehér':
                        $b = 9;
                    break;
                default:
                    echo "Nem választottál ki színt!"; //you haven't chosen any color
            }
            switch($selected_val3){
                case 'fekete':
                        $c = 0;
                    break;
                case 'barna':
                        $c = 1;
                    break;
                case 'vörös':
                        $c = 2;
                    break;
                case 'narancs':
                        $c = 3;
                    break;
                case 'sárga':
                        $c = 4;
                    break;
                case 'zöld':
                        $c = 5;
                    break;
                case 'kék':
                        $c = 6;
                    break;
                case 'ibolya':
                        $c = 7;
                    break;
                case 'szürke':
                        $c = 8;
                    break;
                case 'fehér':
                        $c = 9;
                    break;
                default:
                    echo "Nem választottál ki színt!"; //you haven't chosen any color
            }
            switch($selected_val4){
                case 'ezüst':
                        $d = 0.01;
                    break;
                case 'arany':
                        $d = 0.1;
                    break;
                case 'fekete':
                        $d = 1;
                    break;
                case 'barna':
                        $d = 10;
                    break;
                case 'vörös':
                        $d = 100;
                    break;
                case 'narancs':
                        $d = 1000;
                    break;
                case 'sárga':
                        $d = 10000;
                    break;
                case 'zöld':
                        $d = 100000;
                    break;
                case 'kék':
                        $d = 1000000;
                    break;
                case 'ibolya':
                        $d = 10000000;
                    break;
                case 'szürke':
                        $d = 100000000;
                    break;
                case 'fehér':
                        $d = 1000000000;
                    break;
                default:
                    echo "Nem választottál ki színt!"; //you haven't chosen any color
            }
            switch($selected_val5){
                case 'barna':
                        $e = 1;
                    break;
                case 'vörös':
                        $e = 2;
                    break;
                case 'zöld':
                        $e = 0.5;
                    break;
                case 'kék':
                        $e = 0.25;
                    break;
                case 'ibolya':
                        $e = 0.1;
                    break;
                default:
                    echo "Nem választottál ki színt!";  //you haven't chosen any color
            }
            $szinekErteke = $a . $b . $c;
            //echo $szinekErteke * $d .  " Ohm +/- " . $e . " %<br/>";
            
            echo "<p><table style=\"border: 1px solid black;\">";
            echo "<tr><th colspan=\"2\">Ezeket a színeket választottad : </th></tr>"; //You have chosen these colors:
            echo "<tr><td style=\"border: 1px solid black;\">Első szín:</td><td style=\"border-bottom: 1px dotted black;\">" . $selected_val1 . "</td></tr>"; //First color
            echo "<tr><td style=\"border: 1px solid black;\">Második szín:</td><td style=\"border-bottom: 1px dotted black;\">" . $selected_val2 . "</td></tr>"; //Second color
            echo "<tr><td style=\"border: 1px solid black;\">Harmadik szín:</td><td style=\"border-bottom: 1px dotted black;\">" . $selected_val3 . "</td></tr>"; //Third color
            echo "<tr><td style=\"border: 1px solid black;\">Negyedik szín:</td><td style=\"border-bottom: 1px dotted black;\">" . $selected_val4 . "</td></tr>"; //Fourth color
            echo "<tr><td style=\"border: 1px solid black;\">Ötödik szín:</td><td style=\"border-bottom: 1px dotted black;\">" . $selected_val5 . "</td></tr>"; //Fifth color
            echo "<tr><td></td></tr><tr><td colspan=\"2\">Eredmény: " . $szinekErteke * $d .  " Ohm +/- " . $e . " %</td></tr>"; //Result
            echo "</table></p>";
            }
        ?>
    </body>
</html>
