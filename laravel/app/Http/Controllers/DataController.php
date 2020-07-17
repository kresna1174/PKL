<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Support\Facades\DB;
use App\User;

class DataController extends Controller
{
    public function index()
    {
        // $data = DB::table('students')->get();
        // dd($data);
        $data = Student::all();
        return view('index', ['data' => $data]);
    }
}
