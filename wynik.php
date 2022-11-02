<html>
<head>

</head>
<body>
    <?php
        $con = new mysqli("127.0.0.1","root","","quiz");
        $pytania = $con -> query("SELECT id,content FROM questions");
        $tabelapytan = $pytania->fetch_all(MYSQLI_ASSOC);

        $prawidlowe = 0;
        for($i=0;$i<10;$i++)
        {
        foreach($_POST as $key=>$value)
        {
            if($key==$tabelapytan[$i]["id"])
            {
                echo '<b>'.$key.' ';
                echo ''.$tabelapytan[$i]["content"].':</b> ';
                if($value==0)
                {
                    echo 'Zła odpowiedż✖<br>';
                }
                else if($value==1)
                {
                    echo 'Dobra odpowiedź✔<br>';
                    $prawidlowe++;
                }
            }
        }
        }
        echo '<br>Wynik: '.$prawidlowe.'/'.count($tabelapytan).'<br>Procent: ';
        echo 100*$prawidlowe/count($tabelapytan);
        echo '%';
    ?>
</body>
</html>