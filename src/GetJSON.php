<?php

namespace Tioranat\Controller\Translation;


class GetJSON {
    
    static function getSurveyFileName() {
        return __DIR__ . "/../survey.json";
    }
    
    static function getSurveyAsJSON(){
        return file_get_contents(self::getSurveyFileName());
    }
    
    static function getSurveyAsPHP() {
        return json_decode(self::getSurveyAsJSON(), true);
    }
    
}
