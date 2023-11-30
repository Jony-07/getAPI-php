<?php    
    include_once"render.php";
    include_once "db.php";
    $render = new Render();
    if(isset($_POST['Save'])){
        
        extract($_POST);
        $viewBag = [];
        $model = new Model();
        
        $savedCounter = 0;
        $getCounter = 0; 
        foreach ($countries as $country) {
            $countryData = json_decode($country, true);
            
            $name = $countryData['nombre'];
            $area = $countryData['area'];
            $history = $countryData['region'];
    
            $params = array(
                'nombre' => $name,
                'area' => $area,
                'region' => $history
            );
    
            $resultado = $model->send_data($params);
    
            if ($resultado > 0) {
                $savedCounter += 1;
            }
        }

        $viewBag["message"] = "$savedCounter datos han sido guardados con exito";
        $render->render("result.php", $viewBag);
        
    }else if(isset($_POST['Show'])){
        $model = new Model();
        $chartData = $model->getChartDataForPieChart();
        $viewBag = [];
        $viewBag['datos']=$chartData;
        $render->render("chart.php",$viewBag);
    }
?>