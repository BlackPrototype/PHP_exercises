<!DOCTYPE html>
<html>
    <head>
        <title>Szerver kapcsolat (Server connection)</title>
        <!--
        Prupose of this exercise: Connect to a server and query a given table.
          -ask for the host
          -ask for the username
          -ask for the password
          -ask for a table name
        -->
    </head>
    <body>
        <form action="" method="POST">
            <table>
                <tr><th colspan="2"><h1>Szerver kapcsolódás:</h1></th></tr><!-- Server connection -->
                <tr><td>Kapcsolat neve: </td><td><input type="text" name="kapcsolat" required /></td></tr><!-- Host name -->
                <tr><td>Felhasználónév: </td><td><input type="text" name="user" required /></td></tr><!-- Username -->
                <tr><td>Jelszó: </td><td><input type="password" name="password" required /></td></tr><!-- Password -->
                <tr><td>Tábla: </td><td><input type="text" name="table" required /></td></tr><!-- Table name -->
                <tr><td colspan="2"><input type="submit" value="Gyerünk!"/></td></tr>
            </table>
        </form>
        <?php
            $host = $_POST['kapcsolat'];
            $user = $_POST['user'];
            $password = $_POST['password'];
            $table = $_POST['table'];
            echo empty($host) ? "<br/>Töltsd ki a kapcsolat nevét!" : "<br/>OK";
            echo empty($user) ? "<br/>Töltsd ki a felhasználónevet!" : "<br/>OK";
            echo empty($password) ? "<br/>Töltsd ki a jelszó mezőt!" : "<br/>OK<br/>";
            echo empty($table) ? "<br/>Töltsd ki a tábla mezőt!" : "<br/>OK<br/>";
            $kapcsolat = mysql_connect($host,$user,$password);
            
            if(!$kapcsolat) die ("<br/><strong>Nem kapcsolódik a szerverhez!</strong>"); //server connection test
            $adatbazis=database_name; //database
            mysql_select_db($adatbazis) or die ("Adatbázis nem megy!"); //database connection test
            $sql = "SELECT * FROM $table";
            $sor = mysql_query($sql);
            $mezo = mysql_num_fields($sor);
            
            $sorok = mysql_num_rows($sor);
            
            $tabla = mysql_field_table($sor,0);
            
            //The table datas:
            /*print "<p>A ".$tabla." nevű táblának ".$mezo."db mezője és ".$sorok." sora van<br/>";
            for($i=0; $i<$mezo; $i++){
                $nev = mysql_field_name($sor,$i); //mező neve - field name
                $tipus = mysql_field_type($sor,$i); //mező típusa - field type
                $hossz = mysql_field_len($sor,$i); //mező hossza - field length
                print $nev."  ".$tipus."  ".$hossz."<br>";
            }*/
            
            print "<br>";
            print "<table border=1>"; //show on the screen
            while($record=mysql_fetch_object($sor)){
                print "<tr>";
                foreach($record as $ertek){
                    print "<td>".$ertek."</td>";
                }
                print "</tr>";
            }
            print "</table></p>";
            mysql_close();
        ?>
    </body>
</html>
