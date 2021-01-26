<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function store(Request $request){
        // TODO: save new brand
    }

    public function index(){
        // TODO: list all brands
    }

    public function show(  Brand $brand){
        // TODO: return the Brand view
    }

    public function delete(Brand $brand){
        // TODO: delete the brand
    }

    public function update( Brand $brand , Request $request){
        // TODO: POST - Update the brand
    }

    public function edit( Brand $brand){
        // TODO: Show the brand edit form
    }
}
