<html>
    <head>
        
    </head>
    <body>
        <?php
            $con = new mysqli("127.0.0.1","root","","quiz");
            $pytania = $con -> query("SELECT * FROM questions");
            $odpowiedzi = $con -> query("SELECT * FROM answers");


            $punkty = [["name"=>"question"],["name"=>"anwser","type"=>"checkbox"],["name"=>"done","type"=>"answer"]];
            
            for($i=1;$i<=10;$i++)
            {
                $tabelapytan = $pytania->fetch_array();
                echo 'pytanie '.$i.': '.$tabelapytan[1].'<br>';
                for($z=0;$z<=2;$i++)
                {
                    $tabelaodpowiedzi = $odpowiedzi->fetch_array();
                    if($tabelaodpowiedzi[3]==$tabelapytan[0])
                    {
                        echo ''. $tabelaodpowiedzi[1].' <input type="checkbox"><br>';
                    }
                }
            }
        ?>
    </body>
</html>