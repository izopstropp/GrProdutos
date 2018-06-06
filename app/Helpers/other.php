<?php

if(!function_exists('format_cpf_cnpj')){
    function format_cpj_cnpj($numero){
        if(strlen($numero) == 11){
            $parte1 = substr($numero,0,3);
            $parte2 = substr($numero,3,3);
            $parte3 = substr($numero,6,3);
            $parte4 = substr($numero,9,2);

            return $parte1.".".$parte2.".".$parte3."."."-".$parte4;
        }
    }
}
