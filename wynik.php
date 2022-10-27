<html>
<head>

</head>
<body>
    <?php
        $con = new mysqli("127.0.0.1","root","","quiz");
        $pytania = $con -> query("SELECT id,content FROM questions");
        $tabelapytan = $pytania->fetch_all(MYSQLI_ASSOC);

        for($i=0;$i<10;$i++)
        {
        foreach($_POST as $key=>$value)
        {
            if($key==$tabelapytan[$i]["id"])
            {
                echo $key.': ';
                echo ''.$tabelapytan[$i]["content"].'<br>';
                if($value==0)
                {
                    echo 'Zła odpowiedź<br>';
                }
                else if($value==1)
                {
                    echo 'Dobra odpowiedź<br>';
                }
            }
        }
        }
    ?>
</body>
</html>