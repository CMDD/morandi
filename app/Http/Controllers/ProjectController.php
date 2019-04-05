<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function realizados($project){
        switch ($project) {
            case '114':

                return view('realizados.114');
                break;
            
            
            default:
                # code...
                break;
        }
    }
    public function enVenta($project){
        switch ($project) {
            case 'bosque':
                return view('proyectos.bosque');
                break;
            case 'senior':
                return view('proyectos.senior');
                break;
            case 'caney':

                return view('proyectos.caney');
                break;
            
            default:
                # code...
                break;
        }
    }

    public function store(Request $request){
        return 'llegando';
    }
}
