<html>
<head>
<title>Test PHP</title>
</head>

<body>

<h1>Response del API Contifico:</h1>
<div>

<?php


//https://stackoverflow.com/questions/6739871/how-to-create-an-array-for-json-using-php
// https://restfulapi.net/http-status-codes/   OK created

    /*curl_setopt($ch, CURLOPT_HTTPHEADER, array( 

          'Authorization: ApiKey 02914770-4a13-45f0-bfe3-c2e4666cdbcf',
          'Content-Type: application/json'
                                                                                   
      ) ); */

      
 
        $endpoint = "https://api.contifico.com/sistema/api/v1/documento/"; 


        $data = array(

          'pos' => '02914770-4a13-45f0-bfe3-c2e4666cdbcf',
            'fecha_emision' => '23/09/2020',
            'tipo_documento' => 'FAC',
            'documento' => '011-221-102004089',
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
        
            'descripcion' => 'FACTURA 021',
            'subtotal_0' => 0.00,
            'subtotal_12' => 1.00,
            'iva' => 0.12,
            'servicio' => 0.00,
            'total' => 1.12,
            'adicional1' => '',
            'adicional2' => '',
        
        
        'detalles' => array(
        
        'producto_id' => 'Yqxgepr45454981cUI',
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
        'monto' => 1.12,
        'numero_cheque' => '45645897',
        'tipo_ping' => 'D'
                        
                    ),
        
        );



        $data_string = json_encode($data);    
                                                                       
                                                                                                                                                                                          

            // send API request via cURL
        $ch = curl_init();

        /* set the complete URL, to process the order on the external system. Let’s consider http://example.com/buyitem.php is the URL, which invokes the API */
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
            'Authorization: FrguR1kDpFHaXHLQwplZ2CwTX3p8p9XHVTnukL98V5U',
            'Content-Type: application/json'
                                                                                     
        ));
    
    
        $response = curl_exec($ch);
        print_r($response);

        curl_close ($ch);
        
        // the handle response    
        if (strpos($response,'ERROR') !== false) {
                print_r($response);
        } else {
         
                //
        } 




?>
</div>
<br>
<br>
<form method="post" action >



 
  <input type="submit" value="Submit">

</form>
<br>
<h3>JSON ENVIADO, transformado de un array en PHP via json encode</h3>
<p><?php print_r( $data_string ); ?></p>





</body>

</html>