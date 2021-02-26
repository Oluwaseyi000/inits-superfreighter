<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\GeneralSettings;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generalSettings = GeneralSettings::orderBy('created_at')->get();
        $countries = Country::where('status', 0)->get();
        return view('admin.general-settings', [
             'generalSettings' =>  $generalSettings,
             'countries' => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'settings_key' => 'required',
            'settings_value' => 'required'
        ]);
        GeneralSettings::create([
            'settings_key' => Str::slug($request->settings_key),
            'settings_value' => $request->settings_value,
            'description' => $request->description
        ]);

        return redirect()->back()->with('message', 'General Settings Created Successfully');
      
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeFlatRate(Request $request)
    {

        $request->validate([
            'country_name' => 'required',
            'settings_value' => 'required'
        ]);

        GeneralSettings::create([
            'settings_key' => strtolower($request->country_name.'-flat-rate'),
            'settings_value' => $request->settings_value,
            'description' => $request->description
        ]);

        Country::where('name', $request->country_name)->update([
            'status' => 1
        ]);

        return redirect()->back()->with('message', ' Settings Created Successfully, Country Activated');
      
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
        
       try {

           $setting = GeneralSettings::where('id', $id)->firstOrFail();
           $setting->settings_value = $request->settings_value;
           $setting->description = $request->description;
           $setting->save();
           return redirect()->back()->with('message', 'update successful');
       } catch (\Throwable $th) {
           return redirect()->back()->with('error', 'something went wrong');
       }
    }
}
