<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Models\Blog;
use App\Models\Order;
use App\Models\Ville;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StatisticsController extends Controller
{
    public function Dashboard()
    {
        return view('admin.mains-admin.statistics.dashboard');
    }
}
