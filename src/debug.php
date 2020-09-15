<?php
class JDebug{
    //save to a file
    static function write_json_to_file($data){
        //append a timestamp on the file to distinguish them
        $date = new DateTime();
        $str = $date->format("H_m_s");
        
        //create the file and set it to writable
        $json_file = fopen(__DIR__."/debug/debug_".$str.".json", "w"); 
        
        //write to file
        fwrite($json_file, $data);
        
        //close the file
        fclose($json_file);
    }

}