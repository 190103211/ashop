<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class clientcontroller extends Controller
{
    public function index() {
$clients = Client::all();
return view('client.index')->with(['clients' => $clients]);
    }
}
