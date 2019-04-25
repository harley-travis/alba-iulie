<?php

namespace App\Http\Controllers;

use Auth;
use App\Company;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller {
    
   public function index() {
        $company = Company::find(Auth::user()->company_id);
        return view('settings.overview', ['company' => $company]);
   } 
   
   public function storeIPAddress(Request $request) {
      /**
       * DEPRECATED
       * -----------------------
       * I don't think that many people are going to look at their own job postings
       * 
       * store the IP address to block
       *  
       */

      $user_id = Auth::user()->id;
      $company_id = Auth::user()->company_id;

      $ip = new Setting([
         'ip'           => $request->input('ip'),
         'user_id'   => $user_id, 
         'company_id'   => $company_id,
     ]);

     $ip->save();            
     
   return redirect()
      ->back()
      ->with('info', 'We have saved your IP Address!');
    }
  

}
