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
    public function index() {
        $carousels = Carousel::where('status', 1)->orderBy('order', 'desc')->get();
        $about = About::first();
        $galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();
        $studyPrograms = StudyProgram::get();
        $achievements = Achievement::orderBy('achievement_date', 'desc')->limit(6)->get();;
        return view('landingPages.index', compact('carousels','about','galleries','studyPrograms','achievements'));
    }

    public function galleries() {
        $galleries = Gallery::orderBy('created_at', 'desc')->get();
        return view('landingPages.galleries', compact('galleries'));
    }

    public function achievements() {
        $achievements = Achievement::orderBy('created_at', 'desc')->get();
        return view('landingPages.achievements', compact('achievements'));
    }
}
