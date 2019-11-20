<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Excursion;
use App\ExtraInfo;
use App\Gender;
use App\Interpretor;
use App\Interpretor_Excursion;
use App\Interpretor_ExtInfo;
use App\Interpretor_Language;
use App\Interpretor_Messenger;
use App\Interpretor_Service;
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

    public function signUp(Request $request){

        $user = new Interpretor();
        $response = $request;//  json_decode($request);
//        dd($response);
        $cityId = $response->cityId;
        $genderId = $response->genderId;
        $nameId = $response->nameId;
        $surnameId = $response->surnameId;
        $birthdayId = $response->birthdayId;
        $siteId = $response->siteId;
        $phone_numberId = $response->phone_numberId;
        $skypeId = $response->skypeId;
        $about_meId = $response->about_meId;
        $educationId = $response->educationId;
        $valueId = $response->valueId;
        $messangerId=$response->messangerId;
        $excursionId=$response->excursionId;
        $extra_infoId=$response->extra_infoId;
        $experienceID=$response->experienceID;
        $service_Id=$response->service_Id;
        $descriptionOfServicesId=$response->descriptionOfServicesId;


//        if (request()->avatar) {
//            $imageName = strtotime('now'). '.' . request()->avatar->getClientOriginalExtension();
//            request()->avatar->move(public_path('avatars'), $imageName);
//            $user->photo_id = $imageName;
////            return $this->makeResponse(200, true, ['avatar_path' => $imageName]);
//        }
//        if (request()->certificates) {
//            $imageName = strtotime('now'). '.' . request()->certificates->getClientOriginalExtension();
//            request()->certificates->move(public_path('certificates'), $imageName);
//            $user->certificate_id = $imageName;
////            return $this->makeResponse(200, true, ['avatar_path' => $imageName]);
//        }

        $user->name = $nameId;
        $user->surname = $surnameId;
        $user->gender_id = $genderId;
        $user->city_id = $cityId;
        $user->birthday = $birthdayId;
        $user->site = $siteId;
        $user->phoneNumber = $phone_numberId;
      //  $user->messenger_id = $messangerId;
        $user->skype = $skypeId;
        $user->aboutMe = $about_meId;
        $user->education = $educationId;
    //    $user->extraInfo_id = $extra_infoId;
        $user->experience = $experienceID;
    //    $user->service_id = $service_Id;
        $user->descriptionOfServices = $descriptionOfServicesId;

//        dd($nameId);

        try{
            $user->save();
            $ll=$response->ll;
            foreach ($ll as $l){
                $lang = new Interpretor_Language();

//                dd($l["language"]);
                $lang->language_id = $l["language"];
                $lang->level_id = $l["level"];
                $lang->interpretor_id = $user->id;
                $lang->save();
            }
            $intSer=$response->intSer;
            foreach ($intSer as $is){
                $serv = new Interpretor_Service();
                $serv->service_id = $is["service"];
                $serv->interpretor_id = $user->id;
                $serv->costPerDay = $is["costPerDay"];
                $serv->costPerHour = $is["costPerHour"];
                $serv->save();
            }
            $intMes=$response->messengers;
            foreach ($intMes as $im){
                $mes = new Interpretor_Messenger();
                $mes->messenger_id = $im;
                $mes->interpretor_id = $user->id;
                $mes->save();
            }
            $intExc=$response->excursions;
            foreach ($intExc as $ie){
                $exc = new Interpretor_Excursion();
                $exc->interpretor_id = $user->id;
                $exc->excursion_id = $ie;
                $exc->save();
            }
            $intExtInfo=$response->extraInfos;
            foreach ($intExtInfo as $ii){
                $exc = new Interpretor_ExtInfo();
                $exc->interpretor_id = $user->id;
                $exc->extraInfo_id = $ii;
                $exc->save();
            }

            return $this->makeResponse(200, true, ["user" => $user]);
        }
        catch (\Exception $exception){
            return $this->makeResponse(200, false, ["error" => $exception->getMessage()]);

        }
    }
}
