<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table( 'users' )
            ->join( 'user_domicilios', 'users.id', '=', 'user_domicilios.user_id' )
            ->get();
            foreach ($users as $key => $value) {
                $now = Carbon::now();
                $fecha_nacimiento = Carbon::createFromFormat( 'Y-m-d', $value->fecha_nacimiento );
                $year_nacimiento = $fecha_nacimiento->year;
                $edad = $now->subYears( $year_nacimiento );
                $value->edad = $edad->year;
            }
        return response()->json( $users );
    }
}
