<?php

namespace App\Http\Controllers\Db;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class LaravelMigrationSeederController extends Controller
{
    public function index(){
        $datiOrario = Train::where('orario_di_partenza', '2023-01-24')->get();



        return view('index', [
            'datiOrario'=>$datiOrario
        ]);
    }
}
