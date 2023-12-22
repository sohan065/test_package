<?php

namespace Sohan065\Crud\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sohan065\Crud\Models\Crud;

class CrudController extends Controller
{
    public function index()
    {
        return view('crud::dashboard.pages.index');
    }
    public function create(Request $request)
    {
        Crud::create($request->all());
        return view('crud::admin.admin');
    }
}
