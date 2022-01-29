<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataOnMainController extends Controller
{
  public function showMyData(){ 
      $AboutMe="Jestem młodym aspirującym programistą pasjonatem. Od dzieciństwa interesuje się grami, natomiast procesem ich tworzenia od ok. 4-5 lat realizując się przy różnych  projektach/demach/testach . Ukończyłem jak na ten czas jeden projekt na platformę android, który ciągle rozwijam w wolnych chwilach.";
      return view('welcome',compact('AboutMe'));
  }
}
