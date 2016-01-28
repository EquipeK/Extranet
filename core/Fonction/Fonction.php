<?php

namespace Core\Fonction;

class Fonction {

   
    static function initial($string) {
        $datas = explode(" ", $string);
        $tab ='';
        foreach ($datas as $key => $value) {
             $tab .= Strtoupper(substr($value, 0, 1)).'.';
        }
 
      return substr($tab,0,-1);
    }

   static function slugify($titre){

            $titre = str_replace(chr('160')," ",$titre);
            $slug =  str_replace(' ', '-', $titre);
            $value = htmlentities($slug, ENT_NOQUOTES, 'utf-8');
            $value = preg_replace('#\&([A-za-z])(?:acute|cedil|circ|grave|ring|tilde|uml)\;#', '\1', $value);
            $value = preg_replace('#\&([A-za-z]{2})(?:lig)\;#', '\1', $value);
            $value = preg_replace('#\&[^;]+\;#', '', $value);
            $value = preg_replace('/\s/', '', $value);
            $value = preg_replace('/\W+/', '-', $value);
            $value = strtolower(trim($value, '-'));

             return strtolower($value);
}
}