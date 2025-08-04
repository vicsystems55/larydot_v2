<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Home | Larydot Recruitment',
            'meta_description' => 'Connecting job seekers with trusted UK employers in IT, healthcare, construction, and more.',
        ]);
    }

    public function about()
    {
        return view('about-us', [
            'title' => 'About Us | Larydot Recruitment',
            'meta_description' => 'Learn about Larydot Recruitment’s mission to bridge job seekers and employers across the UK with vetted placements.',
        ]);
    }

    public function services()
    {
        return view('services', [
            'title' => 'Our Services | Larydot Recruitment',
            'meta_description' => 'Explore our recruitment services across IT, cleaning, construction, warehouse, and healthcare sectors in the UK.',
        ]);
    }

    public function contact()
    {
        return view('contact-us', [
            'title' => 'Contact Us | Larydot Recruitment',
            'meta_description' => 'Reach out to Larydot Recruitment for quality staffing solutions or career opportunities across the UK.',
        ]);
    }

    public function jobs()
    {
        return view('job-vacancies', [
            'title' => 'Job Vacancies | Larydot Recruitment',
            'meta_description' => 'Browse the latest job vacancies in healthcare, IT, cleaning, construction, and more across the UK.',
        ]);
    }
}

