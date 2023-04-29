<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table( 'users' )
            ->join( 'user_domicilios', 'users.id', '=', 'user_domicilios.user_id' )
            ->get();
        return response()->json( $users );
    }
}
