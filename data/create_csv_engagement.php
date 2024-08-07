<?php
    //buscamos archivo mas reciente=================================================
    $latest = array(); 
    $latest_time = 0; 
    $latest_filename="**";
    foreach (scandir('engagement', SCANDIR_SORT_DESCENDING) as $file){
        $t = filectime('engagement/'.$file);
        if(($t > $latest_time) && stripos(trim($file),".csv")!==false) {
            $latest_filename = $file;
            $latest_time = $t;
        }
    }
    $t_date = date('m/d/Y',$latest_time);
    $pathAndFile = 'engagement/'.$latest_filename;
    
    //abrimos archivo existente (que luego será copiado a 1drv por el Flow)
    $compositePath = "composites/Detalle de Engagement B2B y Wholesale.csv";
    //$inputComposite = file_get_contents($compositePath);
    
    //anexamos filas nuevas=================================================
    $input = file_get_contents($pathAndFile);
    //file_put_contents($compositePath,$input);
    //$newData = $inputComposite;
    foreach( explode( PHP_EOL, $input ) as $key=>$line ) {
        if($key==0){
            $newData .= '"filename","timestamp",'.$line.PHP_EOL;
        } else {
            $newData .= '"'.$latest_filename.'",'.$t_date.",".$line.PHP_EOL;
        }
    }
    //actualizamos archivo
    file_put_contents($compositePath,$newData);
    
    
    echo("Data was updated");
   
    
    
    die();
?>