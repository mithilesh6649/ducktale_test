<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolumetricWeightController extends Controller
{

    const KG = 6000;
    const LBS = 166;

     public function index(){
        return view('index');
     }

     public function calculate(Request $request){
       try {

           $calculatedVol =  $this->calculateVolumetricWeight( $request->length, $request->weight, $request->height, $request->type) * $request->quantity;
           
           return response()->json([
            'calculatedVol' => $calculatedVol
           ]);

        } catch (\Exception $e) {
        return response()->json([
            'error' => 'Someting went to wrong'
        ], 500);
    } 
           
     }

     public function calculateVolumetricWeight($length, $weight, $height, $type){
          return  ($length * $weight * $height) / ($type == 'kg' ? self::KG : self::LBS);
     }
}
