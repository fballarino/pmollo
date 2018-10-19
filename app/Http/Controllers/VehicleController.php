<?php

namespace App\Http\Controllers;

use App\Category;
use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('vehicles.index', compact('categories'));
    }

    public function displayByCategory(Category $category)
    {
        $vehicles = Vehicle::displayByCategory($category);
        return view('vehicles.list', compact('vehicles'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicles.show', compact('vehicle'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
