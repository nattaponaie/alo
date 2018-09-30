<?php

namespace App\Http\Controllers;
use App\Product;
use App\SubCategories;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.home');
    }
}