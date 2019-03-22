<?php

namespace App\Http\Controllers;

use DB;
use App\Job;
use App\Company;
use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Resources\Api as ApiResource;
use Illuminate\Database\Query\Grammars\Grammar;
use Illuminate\Database\Query\Processors\Processor;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;

class ApiController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // get jobs
        $jobs = Job::all();
        return ApiResource::collection($jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $jobs = Company::find($id)
            ->jobs()
            ->orderBy('created_at', 'ASC')
            ->paginate(15);

        //return view('jobs.overview', ['jobs' => $jobs]);
        //$jobs = Job::where('company_id', '=', $id)->get();


        //return $jobs->jsonSerialize();
        //return response()->json(['success' => 1, 'data' => $jobs]);
         return response(Job::all()->jsonSerialize(), Response::HTTP_OK);
    }


    /**
     * Display the specified job by job id after company id has been specificed
     */
    public function getJobByID($company_id, $job_id) {

        $job = DB::table('jobs')->where('id', '=', $job_id)->get();

        //return view('jobs.overview', ['jobs' => $jobs]);

        // $job = Company::join('jobs', 'companies.id', '=', 'jobs.company_id' )
        //             ->where('jobs.company_id', '=', $company_id)
        //             ->where('jobs.id', '=', $job_id)
        //             ->get();
                    
        return new ApiResource($job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
