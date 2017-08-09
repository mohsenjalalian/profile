<?php

namespace App\Http\Controllers;

use App\Model\Album;
use App\Model\Blog;
use App\Model\Category;
use App\Model\CategoryWorkSample;
use App\Model\Certification;
use App\Model\Contacts;
use App\Model\Docs;
use App\Model\Education;
use App\Model\Language;
use App\Model\Profile;
use App\Model\Recommendation;
use App\Model\Skills;
use App\Model\SocialNetwork;
use App\Model\WorkExperince;
use App\Model\WorkSample;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        $blog = Blog::all();
        $categories = Category::all();
        $certifications = Certification::all();
        $contacts = Contacts::all();
        $docs = Docs::all();
        $educations = Education::all();
        $languages = Language::all();
        $profiles = Profile::all();
        $recommendations = Recommendation::all();
        $skills = Skills::all();
        $socialNetworks = SocialNetwork::all();
        $workExperiences = WorkExperince::all();
        $workSamples = WorkSample::all();

        return view('front.index', compact([
            'albums',
            'blog',
            'categories',
            'certifications',
            'contacts',
            'docs',
            'educations',
            'languages',
            'profiles',
            'recommendations',
            'skills',
            'socialNetworks',
            'workExperiences',
            'workSamples'
        ]));
    }
}
