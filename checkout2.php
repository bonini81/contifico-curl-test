<?php session_start();

/*Test URL: http://dev.pugle.net/hotelerotech/test-session.html */



// Your ID and token;

$url = "https://www.bitpagos.com/api/v1/checkout/";

$authToken = "jqCXw3PMNadm9iTUEP9xFGKfz6Xi67x2EerfMgrmBwYR";



// The data to send to the API

//Minimo de $8 por transaccion para que funcione



$postData = array(

	'pos' => '02914770-4a13-45f0-bfe3-c2e4666cdbcf',
    'fecha_emision' => '21/09/2020',
    'tipo_documento' => 'FAC',
    'documento' => '001-001-000008089',
    'estado' => 'P',
    'electronico' => true,
    'autorizacion'=> '',
    'caja_id' => null,

    'cliente' => array(
'ruc' => '0914848015001',
'cedula' => '0914848015',
'razon_social' => 'Andres Dominguez Bonini',
'telefonos' => '0969078192',
'direccion' => 'Juan de Herrera s4 239 Quito',
'tipo' => 'N',
'email' => 'info@pugle.net',
'es_extranjero' => false
        
    ),

    'vendedor' => array(
        'ruc' => '1792785537001',
'cedula' => '1792785537',
'razon_social' => 'SERVICIOS TRUE NORTH TRUENORTH S.A',
'telefonos' => '0969078192',
'direccion' => 'QUITO / Parroquia Tababela S/N vía a Y SN Y Aeropuerto Internacional Maris',
'tipo' => 'J',
'email' => 'doc.electronicostruenorth@gmail.com',
'es_extranjero' => false
        
    ),

    'descripcion' => 'FACTURA 001',
    'subtotal_0' => 0.00,
    'subtotal_12' => 1.35,
    'iva' => 0.16,
    'servicio' => 0.00,
    'total' => 1.51,
    'adicional1' => '',
    'adicional2' => '',


'detalles' => array(

'producto_id' => 'RZxg87rxLh9Mb1pV',
'cantidad' => 1.00,
'precio' => 1.00,
'porcentaje_iva' => 12,
'porcentaje_descuento' => 0.00,
'base_cero' => 0.00,
'base_gravable' => 1.00,
'base_no_gravable' => 0.00
        
    ),

    'cobros' => array(
       
'forma_cobro' => 'TC',
'monto' => 1.51,
'numero_cheque' => '45627897',
'tipo_ping' => 'D'
                
            ),

);



// Create the context for the request

$context = stream_context_create(array(

    "http" => array(

        // http://www.php.net/manual/en/context.http.php

        "method" => "POST",

         "content" => json_encode($postData),

        "header" => "Authorization: ApiKey {$authToken}\r\n" .

            "Content-Type: application/json\r\n"

      

    )

));



// Send the request

$response = file_get_contents($url, FALSE, $context);



// Check for errors

if($response === FALSE){

    //die('Error');

    print_r(error_get_last());

}





// Decode the response

$responseData = json_decode($response, TRUE);





// Print the date from the response

//echo $response;







echo $responseData['published'];



//Redirect to payment gateway grabbing the JSON check_out URL

$url_pago = $responseData['checkout_url'];

header( 'Location: ' . $url_pago );



/*











// Create the context for the request

$context = stream_context_create(array(

    "http" => array(

        // http://www.php.net/manual/en/context.http.php

        "method" => "POST",

         "content" => json_encode($postData),

        "header" => "Authorization:  {$authToken}\r\n" .

            "Content-Type: application/json\r\n"

       

    )

));



Site Test URL:

http://dev.hostalcolibrilamariscal.com/test-book/bitpagos/test.php

*/





?>