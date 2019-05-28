<?php

namespace App\Http\Controllers;

use Auth;
use App\Company;
use App\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class SettingController extends Controller {
    
   public function index() {
        $company = Company::find(Auth::user()->company_id);
        return view('settings.overview', ['company' => $company]);
   } 

   public function getBilling() {
      return view('billing.overview');
   }

   public function getProfile() {
      return view('settings.profile');
   }

   public function updateCompanySettings(Request $request) {

      // validate 
        //$this->validate($request, [
        //    'title'                 => 'required|min:5',
        //   'compensationAmount'    => 'required|min:1'
        //]);

      $company_id = Auth::user()->company_id;

      // upload logo
      $logo = $request->logo->storeAs('companies/'.$company_id.'/logo', 'logo_'.time().'.png', 'public');

      $company = Company::find($company_id);
      $company->name = $request->input('company_name');
      $company->bio = $request->input('company_bio');
      $company->logo = '/'.$logo;
      $company->save();

      return redirect()
         ->back()
         ->with('info', 'Good news, your settings were saved successfully!');

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
