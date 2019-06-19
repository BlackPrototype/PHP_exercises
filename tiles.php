<!doctype html>
<html lang="hu">
    <head>
        <meta content="text/html; charset=utf-8">
        <title>Csempe (Tiles)</title>
        <!-- 
        Purpose of this exercise: We would like to know how many packages of tiles we need to our bathroom's area.
          -We know that the top of window is on 2.1 meters high. 
          -We would like to cover the wall with tiles too but only for 2 meters high.
          -Also there is a door in this room. 
          -One tile is 20x20 centimeters.
          -One package contains 25 tiles.
          -After we get the exact package number we need to determine it with +10% (for cuts).
        
        We ask the user for give the bathroom's width and length. After that we determine the necessary datas. 
        -->
        <style>
            td 
            {
                text-align: right;
            }
        </style>
    </head>
    <body>
    
        <form action="" method="POST">
            <p>Az adatokat méterben, tizedes ponttal elválasztva kérem. A kimeneti felületek négyzetméterben értendők.</p>
            <!-- Please give the datas in meter and with decimal point if it is not integer. The output datas will be in square meter.-->
            <table>
                <tr>
                    <th colspan="2">Szükséges csempe csomag mennyiség kiszámítása</th>
                    <!-- Necessary tile packages -->
                </tr>
                <tr>
                    <td>A helyiség hossza: &nbsp;</td><td><input type="text" name="helyisegHossza" required /></td>
                    <!-- Length of the room: -->
                </tr>
                <tr>    
                    <td>A helyiség szélessége: &nbsp;</td><td><input type="text" name="helyisegSzelessege" required /></td>
                    <!-- Width of the room: -->
                </tr>
                <tr>    
                    <td>Az ajtó magassága: &nbsp;</td><td><input type="text" name="ajtoMagassag" required /></td>
                    <!-- We ask for the height of the door, but it is not necessary, because almost every door's height is about ~2.05, ~2.1 meters high, but we only need for the width of the door -->
                </tr>
                <tr>    
                    <td>Az ajtó szélessége: &nbsp;</td><td><input type="text" name="ajtoSzelessege" required /></td>
                    <!-- Width of the door: -->
                </tr>
                <tr>    
                    <td>Az ablak magassága: &nbsp;</td><td><input type="text" name="ablakMagassaga" required /></td>
                    <!-- Height of the window: -->
                </tr>
                <tr>
                    <td>Az ablak szélessége: &nbsp;</td><td><input type="text" name="ablakSzelessege" required /></td>
                    <!-- Width of the window: -->
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Számol"/></td>
                    <!-- Let's go -->
                </tr>
            </table>
        </form>
            <?php 

            $csempeMagassag = 2; //the height we need to cover with tiles
            
            $helyisegHossza = $_POST["helyisegHossza"]; //Length of the room
            $helyisegSzelessege = $_POST["helyisegSzelessege"]; //Width of the room
            $ajtoMagassag = $_POST["ajtoMagassag"]; //height of the door
            $ajtoSzelessege = $_POST["ajtoSzelessege"]; //width of the door
            $ablakMagassaga = $_POST["ablakMagassaga"]; //height of the window
            $ablakSzelessege = $_POST["ablakSzelessege"]; //width of the window
            
            //whole area with the door and the window
            $teljesFelulet = 2 * $csempeMagassag * $helyisegHossza + 2 * $csempeMagassag * $helyisegSzelessege + $helyisegHossza * $helyisegSzelessege;
            //The area we need to cover with tiles
            $csempezendoFelulet = $teljesFelulet - ((2 * $ajtoSzelessege) + ($ablakSzelessege * ($ablakMagassaga - 0.1)));
            
            echo "<p>";
            //The room's whole area:
            echo 'A helyiség teljes felülete: ' . $teljesFelulet . "<br/>";
            //The room's area minus window's area and door's area:
            echo 'A helyiség csempézendő felülete: ' . $csempezendoFelulet . "<br/>";

            $egyCsomag = 25; //one package contains 25 tiles
            //We need to determine how many tiles necessary for the floor
            //at the end '/ 0.04' means one tile's area in square meter (0.2x0.2)
            $csempeSzamPadlo = ($helyisegHossza * $helyisegSzelessege) / 0.04;
            //How many package we need for the floor
            $csomagSzamPadlo = $csempeSzamPadlo / $egyCsomag;
            //We need this amount of package for the floor:
            echo 'A padlóra szükséges csomag mennyisége: ' . $csomagSzamPadlo . " (Csempe darabszáma: " . $csempeSzamPadlo . ")<br/>";

            //We need to determine how many tiles necessary for the walls
            //at the end '/ 0.04' means one tile's area in square meter (0.2x0.2)
            $csempeSzamFal = ($csempezendoFelulet - ($helyisegHossza * $helyisegSzelessege)) / 0.04;
            //How many package we need for the walls
            $csomagSzamFal = $csempeSzamFal / $egyCsomag;
            //We need this amount of package for the walls:
            echo 'A falra szükséges csomag mennyisége: ' . $csomagSzamFal . " (Csempe darabszáma: " . $csempeSzamFal . ")<br/>";

            //We need for this amount of package for the whole room:
            echo "A szükséges csomag mennyisége: " . ($csomagSzamFal + $csomagSzamPadlo) . "<br/>";
            //We need for this amount of package (+10%) for the whole room:
            echo "A szükséges csomag mennyisége +10%-al rászámolva: " . ($csomagSzamFal + $csomagSzamPadlo) * 1.1;
            echo "</p>"
            ?>
        </body>
</html>
