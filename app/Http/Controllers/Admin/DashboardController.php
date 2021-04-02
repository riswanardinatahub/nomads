<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\TravelPackage;
use App\Transaction;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        $nowhari = date_create('now')->format('d');
        $now = date_create('now')->format('F');
        $nowtahun = date_create('now')->format('Y');
            


        return view('pages.admin.Dashboard',[
            'datahariini'=>TravelPackage::where('created_at','2020-07-03 07:43:25')->count(),
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status','PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status','SUCCESS')->count(),
        ]);
    }
}
