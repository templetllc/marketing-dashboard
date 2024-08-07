<?php
    //buscamos archivo mas reciente=================================================
    $latest = array(); 
    $latest_time = 0; 
    $latest_filename="**";
    foreach (scandir('campaign', SCANDIR_SORT_DESCENDING) as $file){
        $t = filectime('campaign/'.$file);
        if(($t > $latest_time) && stripos(trim($file),".csv")!==false) {
            $latest_filename = $file;
            $latest_time = $t;
        }
    }

    //leemos nombres de archivos procesados anteriormente=================================================
    $compositePath = "composites/Created Campaigns Detail.csv";
    $arrFilename = [];
    $fHandle = fopen($compositePath, "r");
    $aData = fgetcsv($handle, 1000, ",");
    while (($aData = fgetcsv($fHandle, 1000, ",")) !== FALSE) {
        array_push($arrFilename,$aData[0]);
        
        //echo($aData[0]);echo('<br>');
    }
    fclose($fHandle);
    $arrFilenameUnique = array_unique($arrFilename);
   
    //copiamos s0lo cuando es un archivo nuevo=================================================
    $weHaveReadThisFileBefore = in_array($latest_filename,$arrFilenameUnique);
    if($weHaveReadThisFileBefore===false){
        $pathAndFile = 'campaign/'.$latest_filename;
        $t_date = date('m/d/Y',$latest_time);
        
        //abrimos archivo existente (que luego será copiado a 1drv por el Flow)
        $inputComposite = file_get_contents($compositePath);
        
        //anexamos filas nuevas=================================================
        $input = file_get_contents($pathAndFile);
        $newData = $inputComposite;
        foreach( explode( PHP_EOL, $input ) as $key=>$line ) {
            if($key==0){
                //we do nothing
            } else {
                $newData .= '"'.$latest_filename.'",'.$t_date.",".$line.PHP_EOL;
            }
            
        }
        //actualizamos archivo
        file_put_contents($compositePath,$newData);
        
        
        echo("Campaign Data was updated");
        
    } else{
        echo("Campaign Data was not updated");
    }
   
    
    
    die();
?>