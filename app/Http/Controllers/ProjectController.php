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
            case 'canelon':
                return view('realizados.canelon');
                break;
            case 'bambu':
                return view('realizados.bambu');
                break;
            case 'san-diego':
                return view('realizados.san_diego');
                break;
          
            case 'villas-san-felipe':
                return view('realizados.villas_san_felipe');
                break;
                 
            case 'san-felipe':
                return view('realizados.san_felipe');
                break;
            case 'guaymaral':
                return view('realizados.guaymaral');
                break;
            case 'hacienda-san-luis':
                return view('realizados.hacienda_san_luis');
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
            case 'fique':

                return view('proyectos.fique');
                break;
            case 'oficinas_pietra':

                return view('proyectos.oficinas_pietra');
                break;
            
            default:
                # code...
                break;
        }
    }

    public function avance($project){
        switch ($project) {
            case 'bosque':
                return view('avance.bosque');
                break;
            case 'senior':
                return view('avance.senior');
                break;
            case 'caney':

                return view('avance.caney');
                break;
            case 'fique':

                return view('avance.fique');
                break;
            case 'oficinas-pietra':

                return view('avance.oficinas_pietra');
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
