<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\EmailMailerService;
use Illuminate\Support\Facades\Mail;
use App\EmailStatistics;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
   public function send(Request $request){
        try{
            $data = array(
                'firstname'         => $request->fname,
                'lastname'          => $request->lname,
                'firma'             => $request->firma,
                'street'            => $request->streets,
                'plz'               => $request->plz,
                'ort'               => $request->ort,
                'telephone'         => $request->telephone,
                'emailaddress'      => $request->emailaddress,
                'display_option'    => $request->displaybundle,
                'data_option'       => $request->databundle,
                'desinex_option'    => $request->desinexCount,
            );

            $data2 = array(
                'firstname'         => $request->fname,
                'lastname'          => $request->lname,
                'firma'             => $request->firma,
                'street'            => $request->streets,
                'plz'               => $request->plz,
                'ort'               => $request->ort,
                'telephone'         => $request->telephone,
                'emailaddress'      => $request->emailaddress,
                'display_option'    => json_encode($request->displaybundle),
                'data_option'       => json_encode($request->databundle),
                'desinex_option'    => $request->desinexCount,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            );

            DB::table('email_statistics')->insert($data2);

            Mail::to('app@oldfuture.ch')->send(new EmailMailerService($data));
            return response()->json('Order Successfully Submitted',200);
        }
        catch (Exception $error){
            return response()->json($error,500);
        }


    }



}
