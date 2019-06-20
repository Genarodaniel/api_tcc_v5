<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Resident;


class ResidentController extends \App\Http\Controllers\Controller
{
    private $resident;

    public function __construct(\App\Resident $resident){
       $this->resident = $resident;
    }
    public function all_residents(){

        $data = ['data'=>$this->resident->all()];
        return response()->json($data);
    }



    public function show(\App\Resident $id){
        $data =['data'=>$id];
        return response()->json($data);
    }

    public function ok(){
        return ['status'=> true];
    }



}

?>