<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GetArticlesController extends Controller
{
    //
    public function index(){
        return DB::table('articles')->find(1);
    }
}
