<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\About\CompanyIntro;
use App\Models\About\OurService;
use App\Models\About\OurSkill;
use App\Models\About\OurStory;
use App\Models\About\OurTimeline;
use App\Models\Admin\Faq;
use App\Models\Admin\LicenceInfo;
use App\Models\Admin\Privacy;
use App\Models\Admin\RefundPolicy;
use App\Models\Admin\Terms;
use App\Models\Blog\Blog;
use App\Models\Gallery\SkillBrand;
use App\Models\Gallery\WorkGallery;
use Illuminate\Http\Request;

class AboutPublicController extends Controller
{
    public function about()
    {
        $about = CompanyIntro::first();
        $brands = SkillBrand::where('status', 1)->get();
        $galleries = WorkGallery::where('status', 1)->orderBy('id', 'desc')->get();
        $skills = OurSkill::where('status', 1)->get();
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->limit(3)->get();
        return view('about.company_intro', compact('about','brands','galleries','skills','blogs'));
    }

    public function ourStory()
    {
        $stories = OurStory::where('status', 1)->orderBy('id', 'desc')->get();
        return view('about.our_story', compact('stories'));
    }

    public function timeline()
    {
        $timelines = OurTimeline::where('status', 1)->orderBy('id', 'desc')->get();
        return view('about.our_timeline', compact('timelines'));
    }

    public function services()
    {
        $services = OurService::where('status', 1)->get();
        return view('about.our_services', compact('services'));
    }

    public function serviceShow($slug)
    {
        $service = OurService::where('slug', $slug)->first();
        $skills = OurSkill::where('status', 1)->get();
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->get();
        return view('about.our_services_single', compact('service', 'skills', 'blogs'));
    }

    public function privacy()
    {
        $privacy = Privacy::first();
        return view('about.privacy', compact('privacy'));
    }

    public function terms()
    {
        $terms = Terms::first();
        return view('about.terms', compact('terms'));
    }

    public function licence()
    {
        $licence = LicenceInfo::first();
        return view('about.licence_info', compact('licence'));
    }

    public function refundPolicy()
    {
        $refund_policy = RefundPolicy::first();
        return view('about.refund_policy', compact('refund_policy'));
    }

    public function faq()
    {
        $faqs = Faq::where('status', 1)->get();
        return view('about.faq', compact('faqs'));
    }

}
