<html>
<head>
<title>Amaia</title>
</head>

<body>


<div>
<?php

        $data = array(

          'pos' => '02914770-4a13-45f0-bfe3-c2e4666cdbcf',
            'fecha_emision' => '23/09/2020',
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
        
        'producto_id' => 'YqxgeprxLh9981cUI',
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



        $data_string = json_encode($data);    
                                                                       
                                                                                                                                                                                          
        print_r( $data_string );
       




?>
</div>

<form method="post" action >

 <p><strong>#Habitaciones:</strong> 1</p>
 
 <p><strong>Precio:</strong> Gratis</p>

 <p><strong>Fecha:</strong> 23 de Diciembre</p>
 
  <input type="submit" value="Submit">

</form>


</body>

</html>