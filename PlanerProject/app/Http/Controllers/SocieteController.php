<?php

namespace App\Http\Controllers;

use App\Models\societe as ModelsSociete;
use App\suivi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\societe;


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



    public function get_societe_id($id)
    {
      $message  =  DB::table('societe')
                        ->where('id',$id)
                     
                       ->first();
              
            
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
    public function ListSociete(){
      $societe  =  DB::table('societe')
      ->select(DB::raw('Entreprise,id'))
      ->get()->toArray();
  
      return view('modifier', ['societes'=>$societe]);
    }
    public function adddonnee(Request $request){
     
      $data = $request->all();
     // dd( $data['societe']);
    
      //$societe = societe::find($data['societe']);
     // dd($societe);
     // dd( $data['montantprethonneurdebloque']);
       if(isset($data['montantprethonneurdebloque']))
      {
        societe::where('id', $data['societe'])
      ->update(['MontantPretHonneurDebloque' => $data['montantprethonneurdebloque']]);
     } 
      if(isset($data['dateprethonneurdebloque']))
      {
        
        societe::where('id', $data['societe'])
        ->update(['DatePretHonneurDebloque' => $data['dateprethonneurdebloque']]);
       }
      if(isset($data['verssement1'])){
        societe::where('id', $data['societe'])
        ->update(['MontantVersement1' => $data['verssement1']]);
     }
      if(isset($data['dateverssement1'])){
        societe::where('id', $data['societe'])
        ->update(['DateVersement1' => $data['dateverssement1']]);
      }
      if(isset($data['verssement2'])){
        societe::where('id', $data['societe'])
        ->update(['MontantVersement2' => $data['verssement2']]);
     }
      if(isset($data['dateverssement2'])){
        societe::where('id', $data['societe'])
        ->update(['DateVersement2' => $data['dateverssement2']]);
     }
      if(isset($data['verssement3'])){
        societe::where('id', $data['societe'])
        ->update(['MontantVersement3' => $data['verssement3']]);
     }
      if(isset($data['dateverssement3'])){
        societe::where('id', $data['societe'])
        ->update(['DateVersement3' => $data['dateverssement3']]);
     }
      if(isset($data['verssement4'])){
        societe::where('id', $data['societe'])
        ->update(['MontantVersement4' => $data['verssement4']]);
     }
      if(isset($data['dateverssement4'])){
        societe::where('id', $data['societe'])
        ->update(['DateVersement4' => $data['dateverssement4']]);
     }
      if(isset($data['verssement5'])){
        societe::where('id', $data['societe'])
        ->update(['MontantVersement5' => $data['verssement5']]);
     }
      if(isset($data['dateverssement5'])){
        societe::where('id', $data['societe'])
        ->update(['DateVersement5' => $data['dateverssement5']]);
     }
       

    
      session()->flash('after_add_societe', "les nouvelles données ont été créée avec succès");
      return redirect()->route('details', $data['societe']);
    }
    public function modificationGlobal($id){
      $societe  =  DB::table('societe')
      ->where('id',$id)
      ->get()->toArray();
    
      return view('modificationGlobal', ['societes'=>$societe[0]]);
    }
    
}
