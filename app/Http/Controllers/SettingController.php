<?php

namespace App\Http\Controllers;

use Auth;
use App\Company;
use Illuminate\Http\Request;

class SettingController extends Controller {
    
    public function showEmbed() {

        $company = Company::find(Auth::user()->company_id);
        return view('settings.embed', ['company' => $company]);
    }
}
