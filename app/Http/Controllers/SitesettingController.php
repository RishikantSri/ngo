<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sitesetting;

use App\Models\Section1and2;
use App\Models\Section3and4;
use App\Models\Section5and6;
use App\Models\Contactlist;

use Illuminate\Support\Facades\Mail;

class SitesettingController extends Controller
{
    public function index()
    {
        $sitesetting = Sitesetting::find(1);
        $section1and2 = Section1and2::find(1);
        $section3and4 = Section3and4::find(1);
        $section5and6 = Section5and6::find(1);
    return view('frontend.layouts.app', compact('sitesetting','section1and2','section3and4','section5and6'));
    }

    public function ContactStore(Request $request) 
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => [ 'string','max:255', ],
            'email' => ['string', 'max:100'],
            'address' => [ 'string', 'max:255'],
            'message' => [ 'string', 'max:1000'],
          
           
        ]);
     
        
        $Contactlist = Contactlist::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address ?? null,
            'message' => $request->message ?? 0,
         
        ]);

        if($Contactlist)
        {
             //  Email :sending on registration
 
        // email data
        $email_data = array(
            'name' =>  $request->name,
            'email' =>$request->email,
        );

        // send email with the template
        Mail::send('frontend.layouts.email', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'], $email_data['name'])
                ->subject('Welcome to NGO')
                ->from('NGO@rishikantsri.tech', 'NGO: It Helps');
        });
            
            
            return redirect()->route('home')->with('message', 'Message sent,  successfully.');


        }
           
      

        return redirect()->route('home')->with('message', 'Message Not sent');
    }
  
}
