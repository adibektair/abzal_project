<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Excursion;
use App\ExtraInfo;
use App\Gender;
use App\Language;
use App\Level;
use App\Messenger;
use App\Value;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class ApiController extends Controller
{



    public function getCountries(){
        $countries = Country::all();
        return $this->makeResponse(200, true, ['countries' => $countries]);
    }

    public function getCityByCountryId(Request $request){
		$cities = City::where('country_id', $request->country_id)->get();
		return $this->makeResponse(200, true, ["cities" => $cities]);
    }

    public function getGenders(){
        $genders = Gender::all();
        return $this->makeResponse(200, true, ['genders' => $genders]);
    }

    public function getMessengers(){
        $messengers = Messenger::all();
        return $this->makeResponse(200, true, ['messengers' => $messengers]);
    }

    public function getValues(){
        $values = Value::all();
        return $this->makeResponse(200, true, ['values' => $values]);
    }

    public function getLanguages(){
        $languages = Language::all();
        return $this->makeResponse(200, true, ['languages' => $languages]);
    }

    public function getLevel(Request $request){
        $levels = Level::all();
        return $this->makeResponse(200, true, ['levels' => $levels]);
    }

    public function getExtraInfos(){
        $extra_infos = ExtraInfo::all();
        return $this->makeResponse(200, true, ['extra_infos' => $extra_infos]);
    }

    public function getExcursion(){
        $excursion = Excursion::all();
        return $this->makeResponse(200, true, ['excoursions' => $excursion]);
    }

    public function makeResponse($code, $success, Array $other){
        $json = array_merge($other, ['success' => $success]);
        return response()->json($json)->setStatusCode($code);
    }

    public function singUp(Request $request){

    }
}
