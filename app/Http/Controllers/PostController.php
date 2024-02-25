<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PostController extends Controller
{
	public function result(Request $request){
			$tel = $request->input('phone');
			$pin  = $request->input('pin');
			$person_data = Person::all();
			$flag_tel = 0;
			$pin_person = 0;
			foreach($person_data as $person){
					if($tel == $person->tel){
						$flag_tel = 1;
						$pin_person = $person->pin;
						$id_person = $person->id;
					}
			}
	 		if($flag_tel == 1){
				if($pin == $person_data[$id_person-1]->pin){
						$name = $person_data[$id_person-1]->name;
						$path = $person_data[$id_person-1]->path;
						$month = $person_data[$id_person-1]->month;
					return view('teacher', compact('name', 'path', 'month'));
				}else{
						$msg_pin = 'Не верный пин-код';
						return view('home', compact('msg_pin'));
					}
			}else{
			$msg_tel = 'Не верный номер телефона';
			return view('home', compact('msg_tel'));
			}

	}
		
		public function form()
		{
			return view('post');
		}
}
