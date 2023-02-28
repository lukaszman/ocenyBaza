<!DOCTYPE html>
<html lang="pl=PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie ocen</title>
</head>
<body>
    <header>
        <h1>Dodawanie ocen</h1>
    </header>
    <main>
        <?php
            $connect=mysqli_connect('localhost','root','','4ti');
            if($connect){
                echo "Połączyliśmy się z bazą";
                $zapytanie="SELECT * from przedmiot";
                $wynik=mysqli_query($connect,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $przedmiot[]=$wiersz['nazwa_przedmiotu'];
                    $idprzedmiot[]=$wiersz['id'];
                }
            }else{
                echo "Brak połączenia z bazą";
            }
            mysqli_close($connect);
        ?>
         <?php
            $connect=mysqli_connect('localhost','root','','4ti');
            if($connect){
                echo "Połączyliśmy się z bazą";
                $zapytanie1="SELECT * from dane";
                $wynik=mysqli_query($connect,$zapytanie1);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $imie[]=$wiersz['imie'];
                    $nazwisko[]=$wiersz['nazwisko'];
                    $iddane[]=$wiersz['id'];
                }
            }else{
                echo "Brak połączenia z bazą";
            }
            mysqli_close($connect);
        ?>
            <label for="przedmiot">Wybierz przedmiot</label>
            <select name="przedmiot" id="przedmiot">
            
            <?php
                for($i=0;$i<count($przedmiot);$i++){
                    echo "<option value=$idprzedmiot[$i]> $przedmiot[$i]</option>";
                }
            ?>
            </select>
            <label for="dane">Wybierz ucznia</label>
            <select name="dane" id="dane">
            
            <?php
                for($i=0;$i<count($iddane);$i++){
                    echo "<option value=$iddane[$i]> $imie[$i] $nazwisko[$i]</option>";
                }
            ?>
        </select>
    </main>
    <footer>
        <p>Stronę wykonał ja</p>
    </footer>
    
</body>
</html>