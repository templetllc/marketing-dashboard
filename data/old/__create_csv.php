<?php
    //echo("<h1>success - ".time()."</h1>");//echo('<br><br>');
    
    //buscamos archivo mas reciente=================================================
    $latest = array(); 
    $latest_time = 0; 
    $latest_filename="**";
    //echo($latest_filename);echo('<br>');
    foreach (scandir('campaign', SCANDIR_SORT_DESCENDING) as $file){
        //echo(filectime('campaign/'.$file));echo('<br>');
        
        //print_r($file);
        
        $t = filectime('campaign/'.$file);
        
        //echo(trim($file));echo('<br>');
        //if(($t > $latest_time)) {
        if(($t > $latest_time) && stripos(trim($file),".csv")!==false) {
            //echo($t);echo($file);echo('<br>');
            $latest_filename = $file;
            $latest_time = $t;
        }
        
        
    }
    
    //echo("RESULTS:");echo('<br>');
    //echo("latest_filename: ");echo($latest_filename);echo('<br>');
    //echo("latest_time: ");echo($latest_time);echo('<br>');
    
    
    
    //readfile('campaign/'.$latest_filename);
    
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
   
    
    //copiamos cuando es un archivo nuevo
    $weHaveReadThisFileBefore = in_array($latest_filename,$arrFilenameUnique);
    if($weHaveReadThisFileBefore===false){
        
        //echo($t_date." is _not_ in the array");echo('<br>');
        $pathAndFile = 'campaign/'.$latest_filename;
        $t_date = date('m/d/Y',$latest_time);
        
        
        //creamos archivo nuevo
        //$fp = fopen('data_c_'.time().'.csv', 'w');
        //$fp = fopen('data_c_.csv', 'w');
        //$fp = fopen($compositePath, 'w');
        //fputs($fp, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
        
        //copiamos filas de archivos anteriores
        $inputComposite = file_get_contents($compositePath);
        /*
        foreach( explode( PHP_EOL, $inputComposite ) as $key=>$line ) {
            //$val = explode(",",str_replace('"','',$line));
            $val = $line;
            fputcsv($fp, $val);
        }
        */
        
        //anexamos filas nuevas
        $input = file_get_contents($pathAndFile);
        //$enc = mb_detect_encoding($input);
        //echo("$enc".$enc);echo('<br>');
        //$input = mb_convert_encoding( $input, "UTF-16");
        $newData = $inputComposite;
        foreach( explode( PHP_EOL, $input ) as $key=>$line ) {
            if($key==0){
                //$s = "filename,timestamp,".str_replace('"','',$line);
            } else {
                //$s = $latest_filename.",".$t_date.",".str_replace('"','',$line);
                $newData .= '"'.$latest_filename.'",'.$t_date.",".$line.PHP_EOL;
                
                //$val = explode(",",$s);
                //fputcsv($fp, $val);
            }
            //var_dump( $line );
            //$s = iconv($enc, 'ANSI',$line);
            
        }
        file_put_contents($compositePath,$newData);
        
        //sobreescribimos archivo composite
        //fclose($fp);
        
        /*
        $handle = fopen($pathAndFile, "r");
        if ($handle) {
            $fp = fopen('data_c_'.time().'.csv', 'w');
            fputs($fp, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
            while (($line = fgets($handle)) !== false) {
                //echo('<br>');
                $newData .= $line.PHP_EOL;
                $s = $line.PHP_EOL;
                $val = explode(",",str_replace('"""','"',$line);
                fputcsv($fp, $val);
                //fputcsv($fp, $s);
                //fputcsv($fp, "mmm");
            }
            fclose($fp);
            fclose($handle);
            
            
        }
        */
        //copy($'data_c_.csv', $compositePath)
        /*
        $file = 'data_c_.csv';
        if (!copy($file, $compositePath)) {
            echo "failed to copy $file...\n";
        }else{
            echo("Campaign Data was updated");
        }
        */
        echo("Campaign Data was updated");
        
    } else{
        echo("Campaign Data was not updated");
    }
    //echo($newData);
    //echo('done!<br>');
    //echo('=====================================================');
     
    /*
    $handle = fopen($compositePath, "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            
            echo('<br>');
            echo($line);
            echo('----------------------------------<br>');
        }

        fclose($handle);
    }
    */

    
    
    die();


    $data = array ('aaa,bbb,ccc,dddd',
                   '123,456,789',
                   '"aaa","bbb"',
                   'áéíóú,¿¡á!?');

    //$fp = fopen('data'.time().'.csv', 'w');
    $fp = fopen('data.csv', 'w');
    //fputcsv($fp, chr(0xEF).chr(0xBB).chr(0xBF));
    fputs($fp, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
    foreach($data as $line){
             $val = explode(",",$line);
             fputcsv($fp, $val);
    }
    fclose($fp);
    print_r($data);
?>