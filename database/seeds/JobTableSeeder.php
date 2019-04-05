<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        DB::table('jobs')->insert([
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Personal Assistant', 
            'location' => 'California', 
            'department' => 'Product', 
            'duration' => 1, 
            'compensationType' => 0, 
            'compensationAmount' => 50000, 
            'description' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'work' => 'drive tony around', 
            'qualifications' => 'high school grad',
            'skills' => 'drive cars', 
            'isActive' => '1',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
        ]);

        DB::table('jobs')->insert([
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Head of Security', 
            'location' => 'California', 
            'department' => 'Product', 
            'duration' => 1, 
            'compensationType' => 0, 
            'compensationAmount' => 405000, 
            'description' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'work' => 'protect avengers tower', 
            'qualifications' => 'must be old enough to drive a limo',
            'skills' => 'karate', 
            'isActive' => '1',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
        ]);

        DB::table('jobs')->insert([
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'PowerMan', 
            'location' => 'Utah', 
            'department' => 'Engineering', 
            'duration' => 1, 
            'compensationType' => 1, 
            'compensationAmount' => 45, 
            'description' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'work' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'qualifications' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ',
            'skills' => 'electricity and wiring', 
            'isActive' => '1',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
        ]);

        DB::table('jobs')->insert([
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Song Writer', 
            'location' => 'New York', 
            'department' => 'Audio Department', 
            'duration' => 2, 
            'compensationType' => 1, 
            'compensationAmount' => 23, 
            'description' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'work' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'qualifications' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ',
            'skills' => 'good learner and believer', 
            'isActive' => '1',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
        ]);

        DB::table('jobs')->insert([
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Video Editor', 
            'location' => 'Memphis', 
            'department' => 'A/V', 
            'duration' => 1, 
            'compensationType' => 0, 
            'compensationAmount' => 20003, 
            'description' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'work' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'qualifications' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ',
            'skills' => 'adobe preimiere', 
            'isActive' => '1',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
        ]);

        DB::table('jobs')->insert([
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Storyboard Artist', 
            'location' => 'Mesa', 
            'department' => 'Scripting', 
            'duration' => 1, 
            'compensationType' => 0, 
            'compensationAmount' => 50000, 
            'description' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'work' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'qualifications' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ',
            'skills' => 'english is a must', 
            'isActive' => '1',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
        ]);

        DB::table('jobs')->insert([
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Assistant Director', 
            'location' => 'Long Beach', 
            'department' => 'Production', 
            'duration' => 3, 
            'compensationType' => 1, 
            'compensationAmount' => 55, 
            'description' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'work' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'qualifications' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ',
            'skills' => 'able to tell people to shut up', 
            'isActive' => '1',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
        ]);

        DB::table('jobs')->insert([
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Producer', 
            'location' => 'California', 
            'department' => 'Corporate', 
            'duration' => 1, 
            'compensationType' => 0, 
            'compensationAmount' => 100000000, 
            'description' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'work' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'qualifications' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ',
            'skills' => 'make the bank', 
            'isActive' => '1',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
        ]);

        DB::table('jobs')->insert([
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Producer', 
            'location' => 'California', 
            'department' => 'Corporate', 
            'duration' => 1, 
            'compensationType' => 0, 
            'compensationAmount' => 100000000, 
            'description' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'work' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ', 
            'qualifications' => 'Bacon ipsum dolor amet pork belly shoulder tri-tip tail. Meatloaf sausage pancetta jowl ground round sirloin frankfurter landjaeger filet mignon buffalo shank picanha pork brisket. Bresaola fatback sirloin, kielbasa boudin alcatra bacon tongue porchetta tenderloin buffalo pancetta rump ground round salami. ',
            'skills' => 'make the bank', 
            'isActive' => '1',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
        ]);

        // JOBS FOR USER_ID 2
        DB::table('jobs')->insert([
            'user_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Iron Spider', 
            'location' => 'Arizona', 
            'department' => 'Product', 
            'duration' => 2, 
            'compensationType' => 1, 
            'compensationAmount' => 20, 
            'description' => 'good description', 
            'work' => 'lots of work', 
            'qualifications' => 'super powers',
            'skills' => 'stick to walls or swing', 
            'isActive' => '1',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
        ]);
        
        DB::table('jobs')->insert([
            'user_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => 'Suit Lady', 
            'location' => 'Arizona', 
            'department' => 'Product', 
            'duration' => 2, 
            'compensationType' => 1, 
            'compensationAmount' => 20, 
            'description' => 'Be a robot and work better than Siri', 
            'work' => 'give me the data when needed', 
            'qualifications' => 'must be a robot',
            'skills' => 'quick google searching', 
            'isActive' => '1',
            'filled' => '2001-10-15',
            'closeDate' => '2017-06-18',
        ]);

        // factory(App\Job::class, 10)->create();

        // DB::table('jobs')->insert([
        //     'title' => $faker->job, 
 
        //     // look at list of avaliable locations and return one of those
        //     'location' => 'Romania', 

        //     // look at list of avaliable dept and return one of those
        //     'department' => 'Engineering', 
        //     'duration' => $faker->numberBetween(0, 4), 
        //     'compensationType' => $faker->numberBetween(0, 1), 

        //     // randomize base on compenstationType
        //     'compensationAmount' => $faker->randomNumber(), 
        //     'closeDate' => $faker->date_time, 
        //     'description' => $faker->paragraph, 
        //     'work' => $faker->paragraph, 
        //     'qualifications' => $faker->paragraph,
        //     'skills' => $faker->paragraph, 
        //     'filled' => $faker->numberBetween(0, 1), 
        //     'isActive' => $faker->numberBetween(0, 1),
        //     'user_id' => $faker->numberBetween(0, 4)
        // ]);
    }
}
