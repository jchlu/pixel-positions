<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {

        return view('employer.index', ['employers' => Employer::all()]);
    }
}
