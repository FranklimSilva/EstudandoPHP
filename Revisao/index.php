<!DOCTYPE html>

<head>
    <h1>Revisão </h1>
</head>
<body>
    <?php
        $string = "Curso na dio";
        $numero = 50;
        $array = array("HTML","CSS","JavaScrip","PHP");
        date_default_timezone_set('America/Sao_Paulo');
        $data = date("d/m/y H:i:s");

    ?>
    <h4>Essa é uma variavel do tipo string, para impleentar uma varivel do tipo string
        utilizamos aspas simples('') ou duplas("") :
    <?php
         echo $string;
    ?>
    </h4>

    <h4>
        Essa é uma variavel do tipo número/integer
        para implementar essa variavel utilizamos
        somente os numeros desta forma:
    <?php
        echo $numero;
    ?>
    </h4>
    <h4>
            Está é uma variavel com um array, 
            para implementar um array em uma variavel desta forma:
        <?php
            print_r($array);
        ?>
    </h4>
    <h4>
        Vamos agora implementar uma variavel do tipo datas, para
        implementar a variavel com datas utilizamos uma função propria do PHP desta forma:
        <?php
            print $data;
        ?>
    </h4>
</body>


</html>