<!doctype html>
<html lang="hu">
    <head>
        <title>Oszthatóság (Divisibility)</title>
        <!--
        Purpose of this exercise: We have a number and we would like to determine:
          -Is it even?
          -Is it divisible by three?
          -Is it divisible by four?
          -Is it divisible by five?
          -Is it divisible by a number what we ask for the user?
          -If it is not than write the remainder of it. 
          -If it is prime just write in the row: Prime.
        -->
        <style>
            th{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <form action="" method="POST">
            <table>
                <tr><th colspan="2" style="border: none;"><h1>Oszthatóság vizsgálata:</h1></th></tr><!-- Examination of division -->
                <!-- We ask a user to give the lowest limit of the examination between 1 and 999 -->
                <tr><td>Kérem az alsó határt: </td><td><input type="number" name="min" required /></td><td><?php echo (empty($_POST['min']) || ($_POST['min'] < 0) && ($_POST['min'] > 999)) ? "Kérlek alsó határnak 1 és 999 közötti számot adj meg!" : "OK"; ?></td></tr>
                <!-- We ask a user to give the highest limit of the examination between 1 and 999 -->
                <tr><td>Kérem az felső határt: </td><td><input type="number" name="max" required /></td><td><?php echo (empty($_POST['max']) || ($_POST['max'] < 0) && ($_POST['max'] > 999)) ? "Kérlek felső határnak 1 és 999 közötti számot adj meg!" : "OK"; ?></td></tr>
                <!-- Give an extra divider number that different from 2,3,4,5 -->
                <tr><td>Kérem az osztót: </td><td><input type="number" name="oszto" required /></td><td><?php echo (empty($_POST['oszto']) || ($_POST['oszto'] < 0) && ($_POST['oszto'] > 99)) ? "Kérlek osztó számnak 1 és 99 közötti számot adj meg!" : "OK"; ?></td></tr>
                <tr><td colspan="2"><center><input type="submit" value="Gyerünk!" /></center></td></tr><!-- Let's go -->
            </table>
        </form>
        <?php 
            $min = $_POST['min']; //Lowest number
            $max = $_POST['max']; //Highest number
            $oszto = $_POST['oszto']; //divider
            
            //If it is prime we would like to write to a row: Prime (nothing else)
            function primeCheck($number){ 
                if ($number == 1) 
                return 0; 
                for ($i = 2; $i <= $number/2; $i++){ 
                    if ($number % $i == 0) 
                        return 0; 
                } 
                return 1; 
            } 
            if (!((empty($min) || ($min < 0) && ($min > 999)) && (empty($max) || ($max < 0) && ($max > 999)) && (empty($oszto) || ($oszto < 0) && ($oszto > 99)))){
            echo "<p><table style=\"border: 1px solid black; border-collapse: collapse;\">";
            echo "<tr><th>Szám</th><th>Páros</th><th>Maradék</th><th>3</th><th>Maradék</th><th>4</th><th>Maradék</th><th>5</th><th>Maradék</th><th>" . $oszto . "</th><th>Maradék</th><th>Prím</th></tr>";
          //echo "<tr><th>Number</th><th>Even</th><th>Remainder</th><th>3</th><th>Remainder</th><th>4</th><th>Remainder</th><th>5</th><th>Remainder</th><th>" . $oszto . "</th><th>Remainder</th><th>Prime</th></tr>";
            for($i = $min; $i <= $max; $i++){
                if (primeCheck($i)){
                    echo "<tr><td style=\"border: 1px solid black;\">" . $i . "</td>";
                    echo "<td style=\"color: blue;border: 1px solid black; text-align: right;\" colspan=\"11\">Prím</td>";
                }else{
                    echo "<tr><td style=\"border: 1px solid black;\">" . $i . "</td>";
                    echo ($i%2 == 0) ? "<td style=\"color: green; border: 1px solid black;\">Igaz</td>" : "<td style=\"color: red; border: 1px solid black;\">Hamis</td>";
                    echo "<td style=\"border: 1px solid black;\">" . $i%2 . "</td>";
                    echo ($i%3 == 0) ? "<td style=\"color: green; border: 1px solid black;\">Igaz</td>" : "<td style=\"color: red; border: 1px solid black;\">Hamis</td>";
                    echo "<td style=\"border: 1px solid black;\">" . $i%3 . "</td>";
                    echo ($i%4 == 0) ? "<td style=\"color: green; border: 1px solid black;\">Igaz</td>" : "<td style=\"color: red; border: 1px solid black;\">Hamis</td>";
                    echo "<td style=\"border: 1px solid black;\">" . $i%4 . "</td>";
                    echo ($i%5 == 0) ? "<td style=\"color: green; border: 1px solid black;\">Igaz</td>" : "<td style=\"color: red; border: 1px solid black;\">Hamis</td>";
                    echo "<td style=\"border: 1px solid black;\">" . $i%5 . "</td>";
                    echo ($i%$oszto == 0) ? "<td style=\"color: green; border: 1px solid black;\">Igaz</td>" : "<td style=\"color: red; border: 1px solid black;\">Hamis</td>";
                    echo "<td style=\"border: 1px solid black;\">" . $i%$oszto . "</td>";
                }
                echo "</tr>";
            }
            echo "</table></p>";
            }else{
                echo "Töltsd ki az adatokat!"; //Fill the data areas
            }
        ?>
    </body>
</html>
