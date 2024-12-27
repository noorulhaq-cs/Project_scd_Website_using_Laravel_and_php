<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


use App\Http\Controllers\Controller;

class BoldWareController extends Controller
{
    public function home(){
        $products = Product::all();
        return view("frontend.BoldWare" , compact("products"));
    }

    public function Men(){
        return view("frontend.Men");
    }

    public function Women(){
        return view("frontend.Women");
    }

    public function About(){
        return view("frontend.About");
    }

    public function Contact(){
        return view("frontend.Contact");
    }

    public function Shirts(){
        return view("frontend.Shirts");
    }

    public function Product_detail($id){
        $product = Product::findOrFail($id);
        return view("frontend.Product_detail" , compact("product"));
        
    }
}