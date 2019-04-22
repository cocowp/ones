<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/4/10
 * Time: 11:17
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class FirstController extends Controller
{
    public function index()
    {
        $data = DB::table("user")->get();

        return view('first/show',['data'=>$data]);
    }
}