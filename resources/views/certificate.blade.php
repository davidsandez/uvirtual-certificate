<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UVirtual</title>
    <style>
        .header-bg {
            background: linear-gradient( rgba(0,0,0,0.6), rgba(0, 0, 0, 0.6) ), url("{{ asset('images__app/titulo-oficial.png') }}") CENTER CENTER;
            background-size: cover;
        }
    </style>
</head>
<body>
    <header class="header-bg" style="height: 50vh; display: flex; align-items:center; justify-content: center">
        <h2 style="text-align: center; font-weight: 700; font-size: calc(1.325rem + .9vw); color: #ffffff;">
            Validación de menciones honoríficas
        </h2>
    </header>

    <main style="display: flex; flex-direction: column; align-items: center">

        <p style="text-align: justify;color: #7e7e7e;"> 
            A continuación podrá ver su certificado de mención honorífica si se encuentra registrado en nuestra base de datos.
        </p>

        
        <div style="width: 70%; height: 80%; position: relative; display: flex; flex-direction: column; align-items: center">
            
            <img src="{{ asset( 'images__app/header_certificate.png') }}" 
                style="position: relative; z-index: 99; margin-top:25px" alt="">
            
            <p style="position: relative; z-index: 99; margin-top:40px;">
                Se hace constar que:     
            </p>    

            <h2 style="position: relative; z-index: 99; margin-top: 65px; margin-bottom: 65px">
            @if ( $student->genero == 'f' )
                DÑA.
            @else
                DN.
            @endif
                {{ $student->nombre }}
            </h2>

            <p style="position: relative; z-index: 99;">
                Ha sido 
                @if ( $student->genero == 'f' )
                distinguida
            @else
                distinguido
            @endif
                por la Comisión Académica del Título Propio
            </p>
            <p style="position: relative; z-index: 99;">
                <b>
                    {{ $student->master }},
                </b>
            </p>
            <p style="position: relative; z-index: 99;">
                con el presente:
            </p>

            <h1 style="position: relative; z-index: 99; margin-left: 5%; margin-top: 65px; margin-bottom: 65px">
                DIPLOMA DE MENCIÓN HONORÍFICA
            </h1>

            <P style="position: relative; z-index: 99; ">
                Correspondiente a la edición {{ $student->edicion }}
            </P>
            <P style="position: relative; z-index: 99; ">
                Salamanca, a {{ $student->fechamencion }}
            </P>

            <div style="position: relative; z-index: 99;  margin-top: 65px; margin-bottom: 65px">
                <h3>
                    {{ $student->nombredirector }}
                </h3>    
                <span >
                    @if ( $student->generodirector == 'm' )
                        Director del Máster
                    @else
                        Directora del Máster
                    @endif
                </span>
            </div>

            
            

            <img src="{{ asset( 'images__app/texture_certificate.png' ) }}" 
                style="width: 100%; height: 100%; position: absolute; top: 0; left: 0;" alt="">

        </div>    

    </main>
    
</body>
</html>

  