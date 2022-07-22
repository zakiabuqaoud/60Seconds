<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Feature;
use App\Models\Client;
use App\Models\Data;
use App\Models\Howconcat;

class homeController extends Controller
{
    public function index()
    {
        $home = Home::get();
        $features = Feature::get();
        $clients = Client::get();
        $data = Data::get();
        $howConcat = Howconcat::get();

        return view('60-seconds.index', compact("home", 'features', 'clients', 'data', 'howConcat'));
    }
}
