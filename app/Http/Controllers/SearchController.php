<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinica;

class SearchController extends Controller
{

    public function busca(Request $request) {
        $search = $request->input('search');
        $query = Clinica::where('fantasia', $search)->get()->count();

        if ($query === 0){
        
            $dados= Clinica::paginate(10);
        
        } elseif ($query > 0){
          
          $dados = Clinica::where('fantasia', $search)->paginate(10);
          return view('busca', ['dados' => $dados]);
        }
        
        return view('busca', ['dados' => $dados]);
    }

}

    
