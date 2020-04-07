<?php

namespace Tioranat\Controller\Translation;


class GetJSON {
    
    static function getSurveyFileName() {
        return __DIR__ . "/../rki/survey.json";
    }
    
    static function getTranslationFileName($Locale, $File) {
        $FileName = __DIR__ . "/../lang/$Locale/$File.json";
        if (file_exists($FileName)) {
            return $FileName;
        } else {
            return false;
        }
    }
    
    static function readAsJSON($FileNameJSON) {
        if (file_exists($FileNameJSON)) {
            return file_get_contents($FileNameJSON);
        }
        return false;
    }
    
    static function readAsPHP($FileNameJSON) {
        $JSON = self::readAsJSON($FileNameJSON);
        if ($JSON) {
            return json_decode($JSON, true);
        } else {
            return [];
        }
    }
}
