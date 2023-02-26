<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte PDF Generico</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        h3{
            background-color: blue;
            color: white;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid black;
            border-radius: 20px;
        }

        .contenedor{
            display: flex;
            
        }

        p{
            font-size: 10px; 
        }
        .card{
            display: flex;
        }

        .pie-pagina{
            text-align: center;
        }

        .footer{
            padding: 1em 0;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>




   

<div class="card">
  <div class="card-header" style="background-color: #4b5050;  color: white; text-align: center">
    Historial Académico
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">

    <div>
    

            <p><b>Nombre del subsistema</b> <small>DIRECCIÓN GENERAL DE EDUCACIÓN TECNOLÓGICA INDUSTRIAL Y DE SERVICIOS</small></p>
            <p><b>CURP:</b> <small>{{ $alumno-> CURP}}</small></p> 
            <p><b>Nombre del alumno:</b> <small>{{ $alumno-> nombre_completo}}</small></p>
            <p><b>Folio RNA:</b></p>
            <p><b>Periodo Ingreso:</b></p>
            <p><b>Avance creditos:</b></p>
        
        </div>



            <p><b>Nombre del subsistema</b> <small>DIRECCIÓN GENERAL DE EDUCACIÓN TECNOLÓGICA INDUSTRIAL Y DE SERVICIOS</small></p>


</div>
    </div>
    </blockquote>
  </div>
</div>

    <br><br>
     <div class="responsive-table ">
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div> 










<div class="footer">
    <p>MARTITZA DEL CARMEN CAZAREZ RIOS</p>
    <p>_____________</p>
    <p style="font-size: 8px">LA DIRECTORA DEL PLANTEL</p>
</div>
</body>
</html>
