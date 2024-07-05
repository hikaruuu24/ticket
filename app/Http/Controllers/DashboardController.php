<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Vacancy;


class DashboardController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('permission:dashboard', ['only' => 'dashboard']);
    // }

    public function dashboard(Request $request)
    {
        $data['page_title'] = 'Ticket List';

        return view('dashboard.index', $data);
    }
   
    
}
