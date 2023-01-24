<?php

namespace App\Http\Controllers\Db;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class LaravelMigrationSeederController extends Controller
{
    public function index(){
        $datiOrario = Train::where('orario_di_partenza', '23/01/2023');

        return view('index', [
            'datiOrario'=>$datiOrario
        ]);
    }
}
