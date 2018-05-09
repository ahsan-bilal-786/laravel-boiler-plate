<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Attachment;
use DB;
use Hash;


class SettingsController extends Controller
{
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $settings = Setting::getSettings();
        return view('settings.edit',compact('settings'));
    }

    /**
 * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('logo')) {
            ini_set('memory_limit', '-1');
            $file = $request->file('logo');
            $attachment = Attachment::uploadProfilePhoto($file);
            $input['logo'] = (isset($attachment->id) ? $attachment->id : null);
        }
        Setting::saveSettings($input);
        return redirect()->route('generalSettings')
                        ->with('success','Settings have updated successfully');
    }

    
}
