<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageSiteController extends Controller
{
    public function getPageLienHe()
    {
        $page = DB::table('pages')->where('slug','lien-he')->first();
        dd($page);
    }

    public function getPageGioiThieu()
    {
        $page = DB::table('pages')->where('slug','gioi-thieu')->first();
        dd($page);
    }
}
