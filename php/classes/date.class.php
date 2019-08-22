<?php
    class Date{
        
        var $days =     ['lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche'];
        var $months =   ['Mois','janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre'];

        function getAll($year){
            $r = array();
                $date = new DateTime($year.'-01-01');
                while($date->format('Y') <= $year){
                    $y = $date->format('Y');
                    $m = $date->format('n');
                    $d = $date->format('j');
                    $w = str_replace('0','7',$date->format('w'));
                    $r[$y][$m][$d] = $w;
                    $date->add(new DateInterval('P1D'));
                }
            return $r;

        }
    }