<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('index.index');
    }
    public function privacy(Request $request)
    {
        return view('index.privacy');
    }
    public function usage(Request $request)
    {
        return view('index.usage');
    }
}
