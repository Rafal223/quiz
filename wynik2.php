<html>
<head>

</head>
<body>
    <?php
        $con = new mysqli("127.0.0.1","root","","quiz");
        $pytania = $con -> query("SELECT id,content FROM questions");
        $tabelapytan = $pytania->fetch_all(MYSQLI_ASSOC);

        $odpowiedzi = $con -> query("SELECT content,questions_id,is_right FROM answers");
        $tabelaodpowiedzi = $odpowiedzi->fetch_all(MYSQLI_ASSOC);

        $prawidlowe = 0;
        foreach($_POST as $key=>$value)
        {
            $zmienna = explode("_",$key);
            echo '<b>'.$zmienna[1].' ';
        }
        echo '<br>Wynik: '.$prawidlowe.'/'.count($tabelapytan).'<br>Procent: ';
        echo 100*$prawidlowe/count($tabelapytan);
        echo '%';
    ?>
</body>
</html>