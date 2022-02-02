<!DOCTYPE html>
<html>
  <head>
    <title>Flower tea</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
     integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="{{ URL::asset('JS/datepicker.js') }}"></script>
   </head>
   <body>
  
      <div class="first">
        <div class="container">
          <div class="row" id="headerLogo">
            
            <div class="col-md-4" style="margin-top: 16%;
            margin-left: -5%;">
           
              <nav class="navbar navbar-expand-lg navbar-light ">
          
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('suivi') }}">Suivi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('ajouter') }}">Ajouter</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                      </li>
                    </ul>
                  </div>
              </nav>
            </div>
            <div class="col-md-4"> 
              </div>
            <div class="col-md-4">
              
           
          </div>
          <hr>
          </div>
       <!-- <ul class="social">
            <li> <a href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li> <a href="#"><i class="fab fa-google-plus-g"></i></a>
            </li>
            <li> <a href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li> <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </li>
            <li> <a href="#"><i class="fab fa-behance"></i></a>
            </li>
            <li> <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>-->
       
         </div>
         <div class="container" style="margin-top:5%; background-color:rgba(105, 103, 103,0.5);" >
            <form action="{{ route('addsociete') }}" enctype="multipart/form-data" method="post">
                @csrf
            <div class="row">
               
                <div class="col-md-6" style="border: 1px solid #ccc!important;   margin-top:2%;  border-radius: 16px;
            ">

           <center> <h5>  Informations sur le projet</h5></center>
                    <div class="form-group" style="margin-top:2%;">
                    
                      <input class="form-control form-control-sm" type="text" name="entreprise" placeholder="Nom d'Entreprise">
                      
                    </div>
                    <div class="form-group">
                        
                        <input class="form-control form-control-sm" type="text" name="projet" placeholder="Intitulé du Projet">
                    </div>
                    <div class="form-group">
                       
                        <input class="form-control form-control-sm" type="text" name="branche" placeholder="Branche d'activitée">
                    </div>
                    <div class="form-group">
                       
                        <input class="form-control form-control-sm" type="text" name="programme" placeholder="Programme d'Investissement TTC Chiffres">
                    </div>
                    <div class="form-group">
                       
                        <input type="text" id="datepicker" name="date" class="form-control form-control-sm" placeholder="Date de signature de la convention ">
                    </div>
                    <div class="form-group">
                      
                            <input class="form-control form-control-sm" type="text" name="Emplois" placeholder="Emplois prévus">
                    </div>
                    <div class="form-group">
                       
                        <input type="text" id="datepicker" name="EmploisR" class="form-control form-control-sm" placeholder="Emplois réels ">
                    </div>
                   
                 
                </div>
                <div class="col-md-6" style="border: 1px solid #ccc!important;   margin-top:2%;  border-radius: 16px;
            ">

           <center> <h5> Avancement dans le projet</h5></center>
                    <div class="form-group" style="margin-top:2%;">
                    
                     
                      <select class="form-select form-control-sm form-control" aria-label="Mobilisation terrain"  name="Mobilisation" >
                        <option disabled selected>Mobilisation terrain</option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                       
                      </select>
                    </div>
                    <div class="form-group">
                        
                        
                        <select class="form-select form-control-sm form-control" aria-label="Paiement Terrain"  name="Paiement" >
                            <option disabled selected>Paiement Terrain</option>
                            <option value="Oui">Oui</option>
                            <option value="Non">Non</option>
                           
                          </select>
                    </div>
                    <div class="form-group">
                       
                       
                        <select class="form-select form-control-sm form-control" aria-label="Autorisation de construire"  name="autorisation" >
                            <option disabled selected>Autorisation de construire</option>
                            <option value="Oui">Oui</option>
                            <option value="Non">Non</option>
                           
                          </select>
                    </div>
                    <div class="form-group">
                       
                       
                        
                        <select class="form-select form-control-sm form-control" aria-label=" Construction Pourcent" name="programme" >
                            <option disabled selected> Construction Pourcent</option>
                            <option value="0%">0%</option>
                            <option value="30%">30%</option>
                            <option value="60%">60%</option>
                            <option value="100%">100%</option>
                           
                          </select>
                    </div>
                    
                    <div class="form-group">
                      
                           
                            <select class="form-select form-control-sm form-control" aria-label=" Etapes administratives"  name="EtapesAdministratives" >
                                <option disabled selected> Etapes administratives</option>
                                <option value="PROJETS EN COURS DE DEMANDES D'AUTORISATION ET D'ACTES ADMINISTRATIFS">PROJETS EN COURS DE DEMANDES D'AUTORISATION ET D'ACTES ADMINISTRATIFS</option>
                                <option value="PROJETS AUTORISES EN COURS DE CONSTRUCTION">PROJETS AUTORISES EN COURS DE CONSTRUCTION</option>
                                <option value="PROJETS ATTENTES OCTROI TERRAIN">PROJETS ATTENTES OCTROI TERRAIN</option>
                                <option value="PROJETS AUTORISES EN COURS DE CONSTRUCTION AYANT RECU  UNE TRANCHE DE PRIME D'IMPULSION">PROJETS AUTORISES EN COURS DE CONSTRUCTION AYANT RECU  UNE TRANCHE DE PRIME D'IMPULSION</option>
                               
                              </select>
                    </div>
                   
                   
                 
                </div>
               
         </div>
         <center> <button type="submit" class="btn btn-primary">Engistrer</button></center>
        </form>
      </div>

     
      
     
     
   
      <footer>
          <p class="text-center">Jabri Kaoutar. Job suggestion: jabrikaoutar1@gmail.com</p>
      </footer>
      <script>
        $( function() {
    $( "#datepicker" ).datepicker();
  } );
   </script> 
   </body>
 </html>
