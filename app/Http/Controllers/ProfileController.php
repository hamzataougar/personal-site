<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Etude;
use App\Experience;
use App\Skill;
use App\Capacity;
use App\Contact;
use App\Certification;
use App\Website;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Customer;
use App\Models\Testimonial;
use App\Service;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills_final = [];
        $profile = Profile::latest()->first();
        $etudes = Etude::latest()->take(6)->get();
        $experiences = Experience::latest()->take(6)->get();
        $capacities = Capacity::latest()->take(6)->get();
        $certifications = Certification::all();
        $projects = Website::all();
        $categories_pojects = Website::distinct()->get(['category']);
        $posts = Post::paginate(8);
        $clients = Customer::latest()->take(10)->get();
        $testimonials = Testimonial::latest()->take(6)->get();
        $services = Service::latest()->take(6)->get();
        $skills_final = Skill::latest()->take(6)->get();
        return view('main',['services'=>$services,'testimonials'=>$testimonials,'clients'=>$clients,'posts'=> $posts,'categories'=>$categories_pojects,'profile' => $profile,'etudes' => $etudes,'experiences' => $experiences,'skills' => $skills_final,'capacities' => $capacities,'certifications'=>$certifications,'projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Contact([
            'fullname' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ]);

        $contact->save();
        return redirect('/#contact')->with('message', 'Message sent with success!');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
