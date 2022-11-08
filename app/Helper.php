<?php
use App\Models\Province;
use App\Models\Municipality;

  function muns($id){
    $msg = "";
    $mun = Municipality::find($id);
    $prov = Province::where('id',$mun->province_id)->first();   
    $msg= $mun->name.", ".$prov->name;
    return $msg;
  }
 
 
  function allUpper($str){
    return strtoupper($str);
  }
  ?>