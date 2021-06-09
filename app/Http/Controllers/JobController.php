<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        return response()->json(Job::with('company')->get());
    }

    public function store(Request $request){
        $created = Job::create($request->all());
        
        if(!$created) return response()->json('Erro ao tentar criar vaga');

        return response()->json('Vaga criada');
    }
}
