<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UVirtual</title>
    <style>
        *, html, body{
            margin: 0px;
            padding: 0px;
        }
        th, td {
            padding: 20px;
        }
        table {
            table-layout: fixed;
            border-collapse: collapse;
        }
        th{
            background-color: #373737;
            color: aquamarine;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <header style='background-image: url("{{ asset('images__app/titulo-oficial.png') }}"); 
     height: 50vh; width: 100vw; display:flex; justify-content: center; align-items:center'>
        
        <h1 style="color: #ffffff; font-weight: 800; font-size: 2rem">
            UVirtual
        </h1>
    </header>
    
    <main style="display:flex; flex-direction: column; justify-content:center; align-items:center">

        <h2 style="text-align: justify;color: #7e7e7e; margin-top: 80px; margin-botton:20px"> 
            Lista de estudiantes
        </h2>

        <table style="margin: 40px; color: #373737">

            <thead>
                <tr>
                    <th scope="col">
                        id
                    </th>
                    <th scope="col">
                        Nombre
                    </th>
                    <th scope="col">
                        Master
                    </th>
                    <th scope="col">
                        Director
                    </th>
                    <th scope="col">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($content as $student)
                    <tr>
                        <td>
                            {{ $student->numero }}
                        </td>
                        <td>
                            {{ $student->nombre }}
                        </td>
                        <td>
                            {{ $student->master }}
                        </td>
                        <td>
                            {{ $student->nombredirector }}
                        </td>
                        <td>
                            <div style="padding-left:15px; background-color: #22c6c3; color: white; display: flex; justify-content: center; align-items: center">
                                <a 
                                    href="{{ route( 'download_certificate', $student->numero ) }}">
                                    Generar certificado
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>    
        </table>
    </main>

</body>
</html>
