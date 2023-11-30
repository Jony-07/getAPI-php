<?php
       $url = "https://servicodados.ibge.gov.br/api/v1/paises/all";
       $ch = curl_init($url);
       $counter = 0;
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       $response = curl_exec($ch);

       if (curl_errno($ch)) {
        echo 'Error al hacer la solicitud cURL: ' . curl_error($ch);
       }
    
        curl_close($ch);
        $data = json_decode($response, true);

        //$model = new Model();

        foreach($data as $country){
        $name = $country['nome']['abreviado-ES'];
        $area = $country['area']['total'];
        $region = $country['localizacao']['regiao']['nome'];
       /* $params = array(
            'nombre' => $name,
            'area' => $area,
            'region' => $history
        );
        $resultado = $model->send_data($params);
        if($resultado >0 ){
            $counter+=1;
        }*/
        echo '<input type="hidden" name="countries[]" value=\'{"nombre":"'.$name.'", "area":"'.$area.'", "region":"'.$region.'"}\'>';
        }
       
?>