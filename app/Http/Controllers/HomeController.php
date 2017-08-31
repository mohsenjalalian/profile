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
use App\Model\SkillType;
use App\Model\SocialNetwork;
use App\Model\WorkExperince;
use App\Model\WorkSample;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all()->sortByDesc('created_at');
        $blogs = Blog::all()->sortByDesc('created_at');
        $categories = Category::all()->sortByDesc('created_at');
        $certifications = Certification::all()->sortByDesc('created_at');
        $contacts = Contacts::all()->sortByDesc('created_at');
        $docs = Docs::all()->sortByDesc('created_at');
        $educations = Education::all()->sortByDesc('created_at');
        $languages = Language::all()->sortByDesc('created_at');
        $profiles = Profile::all()->sortByDesc('created_at');
        $recommendations = Recommendation::all()->sortByDesc('created_at');
        $skills = Skills::all()->sortByDesc('created_at');
        $socialNetworks = SocialNetwork::all()->sortByDesc('created_at');
        $workExperiences = WorkExperince::all()->sortByDesc('created_at');
        $workSamples = WorkSample::all()->sortByDesc('created_at');
        $types = SkillType::all()->sortByDesc('created_at');

        return view('front.index', compact([
            'albums',
            'blogs',
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
            'workSamples',
            'types'
        ]));
    }
}
