<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
   public function index()
   {
       
    return view('contact-us');

   }




      public function store(Request $request)
    {
    
       
        $request->validate([
                
            'name' => 'required|string',
            'email' => 'required|string',
            'subject' => 'required|string',
            'body' => 'required|string',

        ]);


         ContactUs::create([
               
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->body,

        ]);



       
        
         return redirect()->route('contact.index')->with('success' , 'پیام ارسال شد ');


    }
}
