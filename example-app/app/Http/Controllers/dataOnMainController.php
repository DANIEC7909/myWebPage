<?php

namespace App\Http\Controllers;

class dataOnMainController extends Controller
{
    
    public function showMyData()
    {
      $data = [
        
        'AMFirst' => "Jestem młodym aspirującym programistą pasjonatem. Od dzieciństwa interesuje się grami, natomiast procesem ich tworzenia od ok.",
        'AMMiddle' => "4-5 lat ",
        'AMSecond' => "realizując się przy różnych  projektach/demach/testach. Ukończyłem jak na ten czas jeden projekt na platformę android, który ciągle rozwijam w wolnych chwilach.",
      ];
        return view('welcome', compact('data'));
    }
}
