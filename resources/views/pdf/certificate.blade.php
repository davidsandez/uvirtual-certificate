
<div style="width: 100%; height: 80%; position: relative; display: flex; flex-direction: column; align-items: center">
    
    <img src="{{ public_path( 'images__app/header_certificate.png') }}" 
        style="position: relative; z-index: 99; margin-left: 30%; margin-top:15px" alt="">
    
    <p style="position: relative; z-index: 99; margin-left: 35%; margin-top:20px;">
        Se hace constar que:     
    </p>    

    <h2 style="position: relative; z-index: 99; margin-left: 10%; margin-top: 65px; margin-bottom: 65px">
       @if ( $student->genero == 'f' )
           DÑA.
       @else
           DN.
       @endif
        {{ $student->nombre }}
    </h2>

    <p style="position: relative; z-index: 99; margin-left: 30%;">
        Ha sido 
        @if ( $student->genero == 'f' )
           distinguida
       @else
           distinguido
       @endif
       por la Comisión Académica del Título Propio
    </p>
    <p style="position: relative; z-index: 99; margin-left: 30%;">
        <b>
            {{ $student->master }},
        </b>
    </p>
    <p style="position: relative; z-index: 99; margin-left: 30%;">
        con el presente:
    </p>

    <h1 style="position: relative; z-index: 99; margin-left: 10%; margin-top: 65px; margin-bottom: 65px">
        DIPLOMA DE MENCIÓN HONORÍFICA
    </h1>

    <P style="position: relative; z-index: 99; margin-left: 30%;">
        Correspondiente a la edición {{ $student->edicion }}
    </P>
    <P style="position: relative; z-index: 99; margin-left: 30%;">
        Salamanca, a {{ $student->fechamencion }}
    </P>

    <div style="position: relative; z-index: 99; margin-left: 10%; margin-top: 65px; margin-bottom: 65px">
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

    
    

    <img src="{{ public_path( 'images__app/texture_certificate.png' ) }}" 
        style="width: 100%; height: 100%; position: absolute; top: 0; left: 0;" alt="">

    <img src="{{ $QR }}" alt="" style="position: absolute; z-index: 99; bottom: 5%; right: 5%;">

</div>    