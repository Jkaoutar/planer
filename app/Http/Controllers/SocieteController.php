<?php

namespace App\Http\Controllers;
use App\suivi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SocieteController extends Controller
{
    public function get_societe()
    {
        
                  $message  =  DB::table('societe as m')
                      ->select(DB::raw('m.Entreprise,m.updated_at ,m.IntituleProjet,m.BrancheActivitee,m.ProgrammeInvestissement,m.DateSignature,m.id,m.DateLancement,m.DateEcheance,m.EmploisPrevus'))                     
                       ->get()->toarray();
               $message = json_decode(json_encode($message), true);
                 $message = collect( $message);
                // dd($message);
                 /*  if($id==0)
        {
      $message =$message ->sortByDesc('updated_at');
        }
         if($id==1)
        {
          
      $message =$message ->sortBy('Entreprise'); 
      
        }
         if($id==2)
        {
      $message =$message ->sortBy('IntituleProjet');
        }
         if($id==3)
        {
      $message =$message ->sortBy('DateSignature');
        }
  
   if($id==4)
        {
            
      $message =$message ->sortBy('DateLancement');
        } */
          return response()->json(['result'=>$message->values()->all()]);
    } 
}
