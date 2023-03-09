<html>
    <head>
    <title>
        Calculando resultados
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <center>
        <?php
        $multiplo=$_GET["calculo"];
        $rangoInicio=$_GET["rangoInicio"];
        $rangoFinal=$_GET["rangoFinal"];
        
     echo '
     <form action="final.php" class="col-2">
     <input type="hidden" id="range2" name="range2" value="'.$rangoFinal.'">
     <input type="hidden" id="range1" name="range1" value="'.$rangoInicio.'">
     <input type="hidden" id="calculo1" name="calculo1" value="'.$multiplo.'">

     
     ';
     
     if($rangoInicio>$rangoFinal)  
      {
        for ($rangoFinal; $rangoFinal <= $rangoInicio; $rangoFinal++) { 
            echo '<div class="col-auto">
            <label class= "form-label" for="fname">'.$multiplo.'x'.$rangoFinal.'</label>
        <input class="form-control" type="text" id="numero'.$rangoFinal.'" name="numero'.$rangoFinal.'"></div>

        ';
        }
        
        echo '<br><div class="col-auto"><input class="btn btn-secondary" type="submit" value="Calcular"></div>';
     }
     else if ($rangoInicio<$rangoFinal)
     {
        for ($rangoInicio; $rangoInicio <= $rangoFinal; $rangoInicio++) { 
            echo '<label class ="form-label"for="fname">'.$multiplo.'x'.$rangoInicio.'</label>
        <input class="form-control" type="text" id="numero'.$rangoInicio.'" name="numero'.$rangoInicio.'">

        ';
        }
        echo '<br><input class="btn btn-secondary" type="submit" value="Calcular">';
     }
        ?>
        </form>
        </center>
    </body>
</html>