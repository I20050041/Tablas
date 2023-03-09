<html>
    <title>
        Resultado de las Tablas de multiplicar
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <body>
        <table class = "table table-info">
        <thead>
    <tr>
    <th scope="col">Operacion</th>
      <th scope="col">Numero ingresado</th>
      <th scope="col">Resultado</th>  
      </tr>
      </thead>
        <?php  
       $puntos=0;
        $contador=$_GET["calculo1"];
        $num1=$_GET["range1"];
        $num2=$_GET["range2"];
        $canitdad=0;
        if($num1>$num2){
            for ($num2; $num2 <=$num1 ; $num2++) 
            { 
                $resultados=$_GET["numero".$num2];
                $multiplicacion= ($contador*$num2);
                $canitdad++;
                if ($resultados==$multiplicacion) 
                {
                echo'<tbody>
                <tr>
                  <td>'.$contador.'x'.$num2.'</td>
                  <td>'.$resultados.'<i class="bi bi-check2-circle"></i></td>
                  <td>'.$multiplicacion.'</td>
                </tr>'; 
                $puntos++;
                }
                else 
                {
                    echo'<tbody>
                    <tr>
                      <td>'.$contador.'x'.$num2.'</td>
                      <td>'.$resultados.'<i class="bi bi-x-circle"></i></td>
                      <td>'.$multiplicacion.'</td>
                    </tr>'; 
                }
            }
              echo '</table></tbody><h4>El puntaje es : '.$puntos.' de '.$canitdad.'</h4>';

        }
        else if($num2>$num1)
        {
            for ($num1; $num1 <=$num2 ; $num1++) { 
                $resultados=$_GET["numero".$num1];
                $multiplicacion= ($contador*$num1);
                $canitdad++;
                if ($resultados==$multiplicacion) 
                {
                    echo'<tbody>
                <tr>
                  <td>'.$contador.'x'.$num1.'</td>
                  <td>'.$resultados.'<i class="bi bi-check2-circle"></i></td>
                  <td>'.$multiplicacion.'</td>
                </tr>'; 
                    $puntos++;
                }
                else 
                {
                    echo'<tbody>
                    <tr>
                      <td>'.$contador.'x'.$num1.'</td>
                      <td>'.$resultados.'<i class="bi bi-x-circle"></i></td>
                      <td>'.$multiplicacion.'</td>
                    </tr>'; 
                }
            }  
            echo '</table></tbody><h4>El puntaje es : '.$puntos.' de '.$canitdad.'</h4>';
        }
?>
    </table>
    </body>
</html>