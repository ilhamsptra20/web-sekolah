<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Achievement;
use App\Models\Carousel;
use App\Models\Gallery;
use App\Models\StudyProgram;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    function index() {
        $carousels = Carousel::where('status', 1)->orderBy('order', 'desc')->get();
        $about = About::first();
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(6);
        $studyPrograms = StudyProgram::get();
        $achievements = Achievement::orderBy('achievement_date', 'desc')->paginate(6);;
        return view('welcome', compact('carousels','about','galleries','studyPrograms','achievements'));
    }
}
