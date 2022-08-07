<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class DashboardController extends Controller
{
    public function fetch_banners()
    {
        return Banner::all();
    }
}
