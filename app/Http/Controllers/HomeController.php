<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Applicant;
use App\Leads;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['social_media']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {

    $applicant = Applicant::all();

        // Count Queries
        $count = Applicant::all()->count();

        $preschool = Applicant::query()->where('education_level', 'PreSchool')->count();

        $highschool = Applicant::query()->where('education_level', 'High School')->count();

        $primary = Applicant::query()->where('education_level', 'Primary School')->count();

        // Sort By Year

        // Sort By Year

        $onenine = Applicant::query()->where('startyear', '2019')->count();
        $twozero = Applicant::query()->where('startyear', '2020')->count();

        // Widget Eloquent Queries

        $kempton_count = Applicant::query()->where('school_branch', 'Kempton_Park')->count();
        $pretoria_count = Applicant::query()->where('school_branch', 'Pretoria')->count();
        $randburg_count = Applicant::query()->where('school_branch', 'Randburg')->count();
        $midrand_count = Applicant::query()->where('school_branch', 'Midrand')->count();
        $germiston_count = Applicant::query()->where('school_branch', 'Germiston')->count();
        $newhavard_count = Applicant::query()->where('school_branch', 'New_Havard')->count();
        $glendale_count = Applicant::query()->where('school_branch', 'Glendale')->count();
        $eastview_count = Applicant::query()->where('school_branch', 'Eastview')->count();
        $roodepoort_count = Applicant::query()->where('school_branch', 'Roodepoort')->count();
        $hazyview_count = Applicant::query()->where('school_branch', 'Hazyview')->count();
        $jhb_count = Applicant::query()->where('school_branch', 'Turffontein')->count();

        // Latest Records Queries

        $recs = Applicant::query()->orderBy('id', 'desc')->take(6)->get();

        // Start-of-Return-Functions

        return view('admin', compact('applicant', 'count', 'preschool', 'highschool', 'primary',
            'kempton_count', 'pretoria_count', 'randburg_count', 'midrand_count', 'germiston_count', 'newhavard_count'
            ,'glendale_count', 'eastview_count', 'roodepoort_count', 'hazyview_count', 'jhb_count', 'onenine', 'twozero', 'recs'), ['recs' => $recs]);


      //return view('admin');

    }

    public function social_media(Request $request)
    {
        $name = $request->name;
        $number = $request->number;
        $email = $request->email;
        $subject = $request->subject;

        try
        {

            $res = Leads::Create([
                'name' => $name,
                'number' => $number,
                'email' => $email,
                'subject' => $subject,
            ]);
            
        } catch (Exception $th) {
            return $th;
        }

        if($res)
        {
            return 'successful';
        }
        else
        {
            return 'failed';
        }
        
    }

    // Schools Plain Data  - to be edited later

    public function pre()
    {
        $pres = Applicant::query()->where('education_level', 'PreSchool')->orderBy('id', 'desc')->get();

        return view('preschool.index', compact('pres'), ['pres'=> $pres]);
    }
    public function high()
    {
        $highs = Applicant::query()->where('education_level', 'High School')->orderBy('id', 'desc')->get();

        return view('highschool.index', compact('highs'), ['highs' => $highs]);
    }
    public function pri()
    {
        $pris = Applicant::query()->where('education_level', 'Primary School')->orderBy('id', 'desc')->get();

        return view('primary.index', compact('pris'), ['pris'=> $pris]);
    }

    // Datatables - Functions
    // Sorting & Searching Variations

    //primary_data
    public function pridatatable()
    {
        return DataTables::of(Applicant::query()->where('education_level', 'Primary School'))->make(true);
    }
    public function primarylist()
    {
        $primary = Applicant::query()->where('education_level', 'Primary School');
        return view('primary.pridata', compact('primary'));
    }
    //preschool_data
    public function predatatable()
    {
        return DataTables::of(Applicant::query()->where('education_level', 'PreSchool'))->make(true);
    }
    public function preschoolist()
    {
        $preschool = Applicant::query()->where('education_level', 'Preschool');
        return view('preschool.predata', compact('preschool'));
    }
    //highschool_data
    public function highdatatable()
    {
        return DataTables::of(Applicant::query()->where('education_level', 'High School'))->make(true);
    }
    public function highschoolist()
    {
        $highschool = Applicant::query()->where('education_level', 'High School');
        return view('highschool.highdata', compact('highschool'));
    }


    // End of Requests 

// School branch Selection for Datatable

    public function kempton(){
        return DataTables::of(Applicant::query()->where('school_branch', 'Kempton_Park'))->make(true);
    }
    public function kemptonpark(){
        $kempton = Applicant::query()->where('school_branch', 'Kempton_Park');
        return view('branches.kempton', compact('kempton'));
    }

    // Next_Branch Pretoria

    public function pretoria(){
        return DataTables::of(Applicant::query()->where('school_branch', 'Pretoria'))->make(true);
    }
    public function pretoriabranch(){
        $pretoria = Applicant::query()->where('school_branch', 'Pretoria');
        return view('branches.pretoria', compact('pretoria'));
    }

    //  Next_Branch Randburg

    public function randburg(){
        return DataTables::of(Applicant::query()->where('school_branch', 'Randburg'))->make(true);
    }
    public function randburgbranch(){
        $randburg = Applicant::query()->where('school_branch', 'Randburg');
        return view('branches.randburg', compact('randburg'));
    }

    // Next_Branch Midrand

    public function midrand(){
        return DataTables::of(Applicant::query()->where('school_branch', 'Midrand'))->make(true);
    }
    public function midrandbranch(){
        $midrand = Applicant::query()->where('school_branch', 'Midrand');
        return view('branches.midrand', compact('midrand'));
    }

    // Next_Branch Germiston

    public function germiston(){
        return DataTables::of(Applicant::query()->where('school_branch', 'Germiston'))->make(true);
    }
    public function germistonbranch(){
        $germiston = Applicant::query()->where('school_branch', 'Germiston');
        return view('branches.germiston', compact('germiston'));
    }

    // Next_Branch New Havard

    public function newhavard(){
        return DataTables::of(Applicant::query()->where('school_branch', 'New_Havard'))->make(true);
    }
    public function newhavardcollege(){
        $newhavard = Applicant::query()->where('school_branch', 'New_Havard');
        return view('branches.newhavard', compact('newhavard'));
    }

    // Next_Branch Roodepoort

    public function roodepoort(){
        return DataTables::of(Applicant::query()->where('school_branch', 'Roodepoort'))->make(true);
    }
    public function roodepoortbranch(){
        $roodepoort = Applicant::query()->where('school_branch', 'Roodepoort');
        return view('branches.roodepoort', compact('roodepoort'));
    }

    // Next_branch Hazyview

    public function hazyview(){
        return DataTables::of(Applicant::query()->where('school_branch', 'Hazyview'))->make(true);
    }
    public function hazyviewbranch(){
        $hazyview = Applicant::query()->where('school_branch', 'Hazyview');
        return view('branches.hazyview', compact('hazyview'));
    }

    // JHB Branch

    public function jhb(){
        return DataTables::of(Applicant::query()->where('school_branch', 'Turffontein'))->make(true);
    }
    public function jhbbranch(){
        $jhb = Applicant::query()->where('school_branch', 'Turffontein');
        return view('branches.jhb', compact('jhb'));
    }

    // Glendale_Branch

    public function glendale(){
        return DataTables::of(Applicant::query()->where('school_branch', 'Glendale'))->make(true);
    }
    public function glendalebranch(){
        $glendale = Applicant::query()->where('school_branch', 'Glendale');
        return view('branches.glendale', compact('glendale'));
    }

    // Eastview

    public function eastview(){
        return DataTables::of(Applicant::query()->where('school_branch', 'Eastview'))->make(true);
    }
    public function eastviewbranch(){
        $eastview = Applicant::query()->where('school_branch', 'Eastview');
        return view('branches.eastview', compact('eastview'));
    }

}
