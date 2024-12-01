<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prognoza pogody Wrocław</title>
        <link rel="stylesheet" href="styl2.css">
    </head>
    <body>
        
        <div id="baner-lewy">
            <img src="logo.png" alt="meteo">
        </div>

        <div id="baner-srodkowy">
            <h1>Prognoza Wroclaw</h1>
        </div>

        <div id="baner-prawy">
            <p>maj 2019</p>
        </div>

        <main>
            <table>
                <tr>
                    <th>DATA</th>
                    <th>TEMPERATURA W NOCY</th>
                    <th>TEMPERATURA W DZIEŃ</th>
                    <th>OPADY [mm/h]</th>
                    <th>CIŚNIENIE [hPa]</th>
                </tr>

                <?php
                    $conn = new mysqli("localhost","root","","prognoza");

                    $sql = "SELECT * FROM pogoda WHERE miasta_id = 1 ORDER BY data_prognozy ASC;";
                    $result = $conn->query($sql);

                    while($row = $result -> fetch_array()) {
                        echo "<tr>";
                            echo "<td>$row[2]</td>";
                            echo "<td>$row[3]</td>";
                            echo "<td>$row[4]</td>";
                            echo "<td>$row[5]</td>";
                            echo "<td>$row[6]</td>";
                        echo "</tr>";
                    }

                    $conn -> close();
                ?>

            </table>
        </main>

        <div id="lewy">
            <img src="obraz.jpg" alt="Polska, Wrocław">
        </div>

        <div id="prawy">
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </div>
        <footer>
        <p>Strone wykonal: Nazar Skryminskyi</p>
        </footer>
    </body>
</html>