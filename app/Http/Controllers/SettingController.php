<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index(){
        return view('pages.admin.general-settings', [
            'setting' => Setting::where('id', 1)->first(),
           /*  "general" => GeneralSetting::where('id', '1')->first(), */
            "user" => Auth::user()
        ]);
    }



    public function update(Request $request){
        $request->validate([
            'headerAd'=> 'mimes:png,jpg,jpeg',
            'homeAd'=> 'mimes:png,jpg,jpeg',
            'footerAd'=> 'mimes:png,jpg,jpeg',
            'singleAd'=> 'mimes:png,jpg,jpeg'
        ]);

        if ($request->hasFile('headerAd')) {
            // Upload the new audio file
            $data = 'headerAd';
            $fileNameExtension = $request->file('headerAd')->getClientOriginalName();
            $fileExtension = $request->file('headerAd')->getClientOriginalExtension();
            $fileName = pathinfo($fileNameExtension, PATHINFO_FILENAME);
            $filename = $fileName . '_' . time() . '.' . $fileExtension;
         //   dd($filename);
            $request->file('headerAd')->move(public_path('adverts'), $filename);

            // Update the audio path for the episode

            // Delete the old audio file if it exists
           /*  if ($oldAudioPath && file_exists(public_path($oldAudioPath))) {
                unlink(public_path($oldAudioPath));
            } */


        }elseif ($request->hasFile('homeAd')) {
            $data = 'homeAd';
            $fileNameExtension = $request->file('homeAd')->getClientOriginalName();
            $fileExtension = $request->file('homeAd')->getClientOriginalExtension();
            $fileName = pathinfo($fileNameExtension, PATHINFO_FILENAME);
            $filename = $fileName . '_' . time() . '.' . $fileExtension;
         //   dd($filename);
            $request->file('homeAd')->move(public_path('adverts'), $filename);

            // Update the audio path for the episode


            // Delete the old audio file if it exists
           /*  if ($oldAudioPath && file_exists(public_path($oldAudioPath))) {
                unlink(public_path($oldAudioPath));
            } */



        }elseif ($request->hasFile('footerAd')) {
            $data = 'footerAd';
            $fileNameExtension = $request->file('footerAd')->getClientOriginalName();
            $fileExtension = $request->file('footerAd')->getClientOriginalExtension();
            $fileName = pathinfo($fileNameExtension, PATHINFO_FILENAME);
            $filename = $fileName . '_' . time() . '.' . $fileExtension;
         //   dd($filename);
            $request->file('footerAd')->move(public_path('adverts'), $filename);

            // Update the audio path for the episode


            // Delete the old audio file if it exists
           /*  if ($oldAudioPath && file_exists(public_path($oldAudioPath))) {
                unlink(public_path($oldAudioPath));
            } */


        }elseif ($request->hasFile('singleAd')) {
            $data = 'singleAd';
            $fileNameExtension = $request->file('singleAd')->getClientOriginalName();
            $fileExtension = $request->file('singleAd')->getClientOriginalExtension();
            $fileName = pathinfo($fileNameExtension, PATHINFO_FILENAME);
            $filename = $fileName . '_' . time() . '.' . $fileExtension;
         //   dd($filename);
            $request->file('singleAd')->move(public_path('adverts'), $filename);

            // Update the audio path for the episode


            // Delete the old audio file if it exists
           /*  if ($oldAudioPath && file_exists(public_path($oldAudioPath))) {
                unlink(public_path($oldAudioPath));
            } */

        }

        $advert = Setting::updateOrInsert([
            'id' => 1],
            [$data => $filename]
        );

        return back()->with('success', 'Advert image uploaded.');


    }
}
