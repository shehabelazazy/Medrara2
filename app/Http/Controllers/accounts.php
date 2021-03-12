<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\accounts;

class accounts extends Controller
{
    //

function list()
{

  $query=DB::table('tests')->select('test_account_id as account_id', DB::raw('count(*) as Number_of_tests'))
                     ->groupBy('test_account_id')->get();

                    return view('welcome',['query' => $query]);

}



}
