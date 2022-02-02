<?php

namespace App\Http\Controllers;
use App\suivi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\societe;


class SocieteController extends Controller
{
    public function get_societe()
    {
        
                  $message  =  DB::table('societe as m')
                      ->select(DB::raw('m.id,m.Entreprise,m.updated_at ,m.IntituleProjet,m.BrancheActivitee,m.ProgrammeInvestissement,m.DateSignature,m.id,m.DateLancement,m.DateEcheance,m.EmploisPrevus'))                     
                       ->get()->toarray();
               $message = json_decode(json_encode($message), true);
                 $message = collect( $message);
             
          return response()->json(['result'=>$message->values()->all()]);
    } 















    /*hadi hia function li kanjib biha les données mn database*/


    public function get_societe_id($id)
    {
      $message  =  DB::table('societe as m')
                      ->select(DB::raw('m.id,m.Entreprise,m.updated_at ,m.IntituleProjet,m.BrancheActivitee,m.ProgrammeInvestissement,m.DateSignature,m.EmploisPrevus'))                     
                     
                       ->first();
               $message = json_decode(json_encode($message), true);
            
          return response()->json($message);
    } 










    public function addsociete(Request $request){
     
      $data = $request->all();
      $Entreprise = $data['entreprise'];
      $IntituleProjet = $data['projet'];
      $BrancheActivitee = $data['branche'];
      $ProgrammeInvestissement = $data['programme'];
      $DateSignature = $data['date'];
      $EmploisPrevus = $data['Emplois'];
      $EmploisReels = $data['EmploisR'];
      $MobilisationTerrain = $data['Mobilisation'];
      $PaiementTerrain = $data['Paiement'];
      $AutorisationConstruire = $data['autorisation'];
      $Construction = $data['programme'];
      $EtapesAdministratives = $data['Emplois'];
      $data=array('Entreprise'=>$Entreprise,"IntituleProjet"=>$IntituleProjet,"BrancheActivitee"=>$BrancheActivitee,"ProgrammeInvestissement"=>$ProgrammeInvestissement,
      'DateSignature'=>$DateSignature,'EmploisPrevus'=>$EmploisPrevus,'EmploisReels'=>$EmploisReels,'MobilisationTerrain'=>$MobilisationTerrain,
      'PaiementTerrain'=>$PaiementTerrain,'AutorisationConstruire'=>$AutorisationConstruire,'Construction'=>$Construction,'EtapesAdministratives'=>$EtapesAdministratives,);
      DB::table('societe')->insert($data);
     
    
      session()->flash('after_add_societe', "une nouvelle société a été créée avec succès");
      return redirect()->route('suivi');
    }
    
}
