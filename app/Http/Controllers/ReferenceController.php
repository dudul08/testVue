<?php

namespace App\Http\Controllers;

use App\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{

    public function store(Request $request)
    {
        $datas = $request->all();
//        $reference = new Reference();
//        $reference->libelle_reference = $data['libelle_reference'];
//        $reference->save();
        $datas = $datas['listLibelleReference'];


        foreach ($datas as  $data ){
            Reference::create($data);
        }



    }


}
