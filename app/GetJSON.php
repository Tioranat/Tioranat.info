<?php



namespace App\Controller;

class GetJSON {
    
    static function getSurvey(){
        return __DIR__. "/../rki/survey.json";
    }
    
    static function getTranslation($Locale,$File){
        $FileName = __DIR__."/../locale/$Locale/$File.json";
        if(file_exists($FileName)){
            return $FileName;
        }else{
            return false;
        }
    }
}
