<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nome)
    {
        return view('test.index', ['nome' => $nome]);
    }

    public function notas()
    {
        $notas = [
            0 => 'Anotações 1',
            1 => 'Anotações 2',
            2 => 'Anotações 3',
            3 => 'Anotações 4',
            4 => 'Anotações 5'
        ];
        return view('test.notas', compact('notas'));
    }

}
