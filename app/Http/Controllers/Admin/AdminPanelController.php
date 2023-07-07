<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class AdminPanelController extends Controller
{
    public function __invoke()
    {
        return view('admin.panel');
    }
}
