<?php

namespace App\Http\Controllers\Api;

use App\CurrencyCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrencyCodeController extends Controller
{

    public function __construct(){
        $this->middleware('jwtauth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currenciesCode = CurrencyCode::all();
        return response()->json(
            $currenciesCode
        );
    }

}
