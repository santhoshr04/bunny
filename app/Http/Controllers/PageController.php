<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('landing-pages.index');
    }

    public function services()
    {
        return view('landing-pages.services.index');
    }

    public function baby()
    {
        return view('landing-pages.services.baby.index');
    }

    public function birthday()
    {
        return view('landing-pages.services.birthday.index');
    }

    public function cakesmash()
    {
        return view('landing-pages.services.cakesmash.index');
    }

    public function family()
    {
        return view('landing-pages.services.family.index');
    }

    public function maternity()
    {
        return view('landing-pages.services.maternity.index');
    }

    public function newborn()
    {
        return view('landing-pages.services.newborn.index');
    }

    public function sitter()
    {
        return view('landing-pages.services.sitter.index');
    }

    public function toddler()
    {
        return view('landing-pages.services.toddler.index');
    }

    public function gallery()
    {
        return view('landing-pages.gallery.index');
    }

    public function book()
    {
        return view('landing-pages.book.index');
    }
}
