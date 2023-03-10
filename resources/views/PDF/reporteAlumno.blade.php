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
        .tam{
          font-size: 8px;
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

    <div class="float-left">
      <p><b>Nombre del subsistema</b> <small>DIRECCIÓN GENERAL DE EDUCACIÓN TECNOLÓGICA <br>INDUSTRIAL Y DE SERVICIOS</small></p>
      <p><b>CURP:</b> <small>{{ $alumno-> CURP}}</small></p> 
      <p><b>Nombre del alumno:</b> <small>{{ $alumno-> nombre_completo}}</small></p>
      <p><b>Folio RNA:</b></p>
      <p><b>Periodo Ingreso:</b></p>
      <p><b>Avance creditos:</b></p>
    </div>
      <p><b>Nombre del Plantel:</b> <small>CENTRO DE ESTUDIOS TECNOLÓGICA INDUSTRIAL Y DE SERVICIOS</small></p>
      <p><b>Modalidad educativa:</b> <small>Escolarizada</small></p>
      <p><b>Opción educativa:</b> <small>Presencial</small></p>
      <p><b>Plan de Estudios:</b> <small>Acuerdo 653</small></p>
      <p><b>Carrera Técnica en:</b> <small>{{$alumno->carrera}}</small></p>
    </blockquote>
  </div>
</div>
    
    
  </div>
</div>

<br><br>
<div class="responsive-table ">
<table class="table table-bordered table-sm">
  <thead class="tam">
    <tr>
      <th scope="col">Nombre Plantel</th>
      <th scope="col">Semestre</th>
      <th scope="col">Nombre</th>
      <th scope="col">Calif</th>
      <th scope="col">Periodo Escolar</th>
    </tr>
  </thead>
  <tbody class="tam">
  @foreach ($alumno->materias as $a)
    <tr>
      <th scope="row">CETIS NO.107</th>
      <td>PENDIENTE</td>
      <td>{{$a->materia->nombre}}</td>
      <td>{{$a->calificacion}}</td>
      <td>{{$a->periodo}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div> 










<div class="footer">
    <p>MARTITZA DEL CARMEN CAZAREZ RIOS</p>
    <p>________________________________</p>
    <p style="font-size: 8px">LA DIRECTORA DEL PLANTEL</p>
</div>
</body>
</html>
