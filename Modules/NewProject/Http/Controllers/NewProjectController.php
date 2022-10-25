<?php

namespace Modules\NewProject\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use TreeWalker;
use function MongoDB\BSON\toJSON;
use function Symfony\Component\Translation\t;

class NewProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(){
        $treewalker = new TreeWalker(array(
            "debug"=>false,
            "returntype"=>"array")
        );
        $data_old = Http::get('http://localhost:8080/publishers');
        $data_new = Http::get('http://localhost:8080/providers');
        $data = $treewalker->getdiff($data_old->json(),$data_new->json());
        print_r(json_encode($data));
        //return $data;
        return view('newproject::index')->with('data',json_encode($data));
//
//        return $data;
    }

}
