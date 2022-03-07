<?php

    require 'config.php';

    function filterData(&$str){
        $str = preg_replace("/\t/","\\t",$str);
        $str = preg_replace("/\r?\n/","\\n",$str);
        if (strstr($str,'"')) $str = '"' . str_replace('"','""',$str) .'"';
    }
    $fileName = "UPEC" . date('Ymd') . ".xlsx";
    $fileds = array('id_machine','date','constructeur','type','identifiantT','n&b','n&b_GF','couleur','couleur_GF');
    $excelData = implode ("\t", array_values($fileds)) . "\n";
    $sql = "SELECT * FROM machine";
    $query = $conn->query($sql);

    if ($query->num_rows > 0){
        $i=0;
        while($row = $query ->fetch_assoc()){ 
            $rowData = array($row['id_machine'], $row['date'], $row['constructeur'], $row['type'], $row['identifiant'], $row['nandb'], $row['nandb_GF'], $row['couleur'], $row['couleur_GF']);
            array_walk($rowData,'filterData');
            $excelData .= implode("\t",array_values($rowData)) ."\n";
        }
    }
    else{
        $excelData .= 'Aucun donnés trouver...' ."\n";
    }
    header("Content-Disposition: attachement; filename=\"$fileName\"");
    header("Content-Type: application/vmd.ms-excel");

    echo $excelData;

    exit;
?>