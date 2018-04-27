<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

    // make these variables mass assignable
    protected $fillable = ['title', 'location', 'department', 'duration', 'compensationType', 'compensationAmount', 'description', 'work', 'qualifications','skills'];

   public function getJobs($session) {
       if(!$session->has('jobs')){
           $this->createDummyData($session);
       }
       return $session->get('jobs');
   }

   public function addJob($session, $title, $compensationAmount) {

    //    if(!$session->has('jobs')){
    //        $this->createDummyData();
    //    }

       $jobs = $session->get('jobs');
       array_push($jobs, [
                'title'                 => $title, 
                'location'              => $location,
                'department'            => $department,
                'duration'              => $duration,
                'compensationType'      => $compensationType,
                'compensationAmount'    => $compensationAmount,
                'description'           => $description,
                'work'                  => $work,
                'qualifications'        => $qualifications,
                'skills'                => $skills
        ]);
       $session->put('jobs', $jobs);

   }

   public function editJob($session, $id, $title, $compensationAmount) {

        $jobs = $session->get('jobs');
        $jobs[$id] = ['title' => $title, 'compensationAmount' => $compensationAmount];
        $session->put('jobs', $jobs);

   }

   private function createDummyData($session){

       $jobs = [
           [
               'title' => 'backend dev',
               'compensationAmount' => '65000'
           ],
           [
            'title' => 'frontend dev',
            'compensationAmount' => '60000'
          ]
        ];

        $session->put('jobs', $jobs);
   }

    
}
