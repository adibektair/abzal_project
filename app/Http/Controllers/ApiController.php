<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
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





    public function makeResponse($code, $success, Array $other){
        $json = array_merge($other, ['success' => $success]);
        return response()->json($json)->setStatusCode($code);
    }
}
