<?php

namespace App\Http\Controllers;

use function compact;
use function dd;
use Illuminate\Http\Request;
use App\Vue;
use function redirect;
use function route;
use function view;

class vueController extends Controller
{
    public function index()
    {
        return view('vue');
    }

    public function allVue()
    {
        $all=Vue::orderby('id','DESC')->get();
        return $all;
    }

    public function store(Request $request,Vue $vue)
    {
        $vue->create($request->all());
    }

    public function deleteVue(Vue $vue)
    {
        $vue->delete();
    }

    public function ShowUpdate(Vue $vue)
    {
        return $vue;
    }

    public function saveEdit(Request $request,Vue $vue)
    {
        $vue->update($request->all());
    }

    public function vueSearch(Request $request,Vue $vue)
    {
        $name=$request->name;
        $all=Vue::where('name','like',"%$name%")->get();
        return $all;
    }
}
