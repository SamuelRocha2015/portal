<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function dataPtBrParaDataMySql($dataPtBr){
    $partes = explode("/", $dataPtBr);
    return "{$partes[2]}-{$partes[1]}-{$partes[0]}";
}