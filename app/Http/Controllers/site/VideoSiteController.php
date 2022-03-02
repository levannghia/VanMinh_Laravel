<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VideoSiteController extends Controller
{
    public function getAllVideo()
    {
        $video = DB::table('videos')->where('status',1)->orderBy('id','DESC')->get();
        dd($video);
    }
}
