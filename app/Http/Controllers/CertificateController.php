<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CertificateController extends Controller
{
    protected $url = 
    "https://www.uvirtual.org/hubfs/Archivos%202022/Archivos%20web/ejercicio/datos.json";

    protected $pathQR = "../public/qrcodes/qrcode-";


    public function list_students()
    {
        return view( 'list-students', [ "content" => $this->get_all_students() ] );
    }
    
    public function view_certificate( $id )
    {
        return view( 'certificate', [ "student" =>  $this->get_student($id) ] );
    }

    public function download_certificate( $id )
    {
        //return $this->generate_QR( $id );
        $this->generate_QR( $id );
        $student = $this->get_student( $id );
        $data = [
            'student'   => $student,
            'QR'        => $this->pathQR($id) 
        ];
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView( 'pdf.certificate', $data );
        return $pdf->download( "certificate.pdf" );
    }

    private function get_student( $id )
    {
        $student_select;
        foreach( $this->get_all_students() as $student )
        {
            if ( $student->numero == $id )
            {
                $student_select = $student; 
            }
        }
        return $student_select;
    }

    private function get_all_students()
    {
        $http       = new Client();
        $response   = $http->get( $this->url );
        return json_decode( $response->getBody() );
    }

    private function generate_QR( $id )
    {
        $uri = route( 'view_certificate', $id );
        return( QrCode::generate($uri, $this->pathQR($id)) );
    }

    private function pathQR( $id )
    {
        return $this->pathQR . "$id.svg";
    }
}
