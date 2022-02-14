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
      <style>
          
          .inquirytable label {
    font-size: 12px;
    font-weight: 400;
    color: #d1d1d1;
    line-height: normal;
}
.inquirytable h5 {
    font-size: 12px;
    font-weight: 400;
    color: #242424;
    line-height: normal;
}
    input[type="submit"] {
        border-radius: 10px;
        font-size: 20px;
        line-height: 30px;
        font-weight: 700;
        color: #c17c3a;
        text-align: center;
        background-color: #fff;
        padding: 20px 30px;
        height: 70px;
    }
     a{
            text-decoration : none;
        }
       
 @media (max-width:1024px){
     table tr, table tr td:nth-last-child(1) {
    display: block !important;
    clear: both;
}
table tr, table tr td {
    clear: both;
}
td{
    width : 450px;
}

 }
/**************************/

        .onglet
        {
                display:inline-block;
                margin-left:3px;
                margin-right:3px;
                padding:3px;
                border:1px solid black;
                cursor:pointer;
        }
        .onglet_0
        {
                background:#bbbbbb;
                border-bottom:1px solid black;
        }
        .onglet_1
        {
                background:#dddddd;
                border-bottom:0px solid black;
                padding-bottom:4px;
        }
        .contenu_onglet
        {
                background-color:#dddddd;
                border:1px solid black;
                margin-top:-1px;
                padding:5px;
                display:none;
        }
        ul
        {
                margin-top:0px;
                margin-bottom:0px;
                margin-left:-10px
        }
        h1
        {
                margin:0px;
                padding:0px;
        }
        
</style>
   </head>
   <body>
    <div id="url-holder" data-societe="{{ route('get_societe_id') }}"></div>
      <div class="first">
        <div class="container">
          <div class="row" id="headerLogo">
            
            <div class="col-md-4" style="margin-top: 16%;
            margin-left: -5%;">
           
              <nav class="navbar navbar-expand-lg navbar-light ">
          
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item ">
                        <a class="nav-link" href="{{ route('welcome') }}">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('suivi') }}">Suivi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('ajouter') }}">Ajouter</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{ route('modification') }}">Modification</a>
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
         <section class="inquirisec">
            <div class="container">
               
              
                <table class="table inquirytable" id="table_id">
                    <thead >
                        <tr>
                            <th class="td" style="visibility:hidden" >  </th>
                            <th class="td" style="visibility:hidden"> </th>
                           
    
                        </tr>
                       
                    </thead>
    
                </table>
               
               
    
            </div>
        </section>
       
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

        <script type="application/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $.noConflict();
                const $urlHolder = $('#url-holder');
                var url = window.location.pathname;
                var id = url.substring(url.lastIndexOf('/') + 1);

                var table = $('#table_id').DataTable({
                    "ordering": false
     });
    
    /* 
     var table2 = $('#table').DataTable({
    }); */
  
    
                $.ajax({
                    type: 'get',

                    url: $urlHolder.data('societe')+'/'+id,
                   
                    dataType: 'JSON',
                    success: function(data) {
                        
                        table.clear().draw();
                    
                            var date = new Date(data['DateSignature']);
                           
                            var newdate = new Date(date);
                            newdate.setDate(newdate.getDate() + 180);
                            var dd = newdate.getDate();
                            var mm = newdate.getMonth() + 1;
                            var y = newdate.getFullYear();
                            var someFormattedDate = mm + '-' + dd + '-' + y;
                            newdate.setDate(newdate.getDate() + 547);
                            var dd = newdate.getDate();
                            var mm = newdate.getMonth() + 1;
                            var y = newdate.getFullYear();
                            var someFormattedDate2 = mm + '-' + dd + '-' + y;
                            var PrimeIpulation =  Math.min(data['ProgrammeInvestissement']*0.3, 800000);
                            var PretHonneur =  Math.min(data['ProgrammeInvestissement']*0.2, 500000);
                            var PrimePourcentage = PrimeIpulation / data['ProgrammeInvestissement'];
                            var PretHonneurPourcentage = PretHonneur / data['ProgrammeInvestissement'];
                            var PretHonneurNonDebloque = PretHonneur - data['MontantPretHonneurDebloque'];
                            var PretHonneurNonDebloquePourcent = data['MontantPretHonneurDebloque'] /PretHonneur ;
                            var PrimeIpulationdebloquepourcent = (data['MontantVersement1'] + data['MontantVersement2']+data['MontantVersement3']+data['MontantVersement4']+data['MontantVersement5'])/PrimeIpulation; 
                            var PRIMEIMPUSLIONNONDEBLOQUEE = PrimeIpulation - (data['MontantVersement1'] + data['MontantVersement2']+data['MontantVersement3']+data['MontantVersement4']+data['MontantVersement5'])
                            

                            table.row.add([
                                `<label></label>
                              
                                <h3><span class="openedcolor"></span>${data['Entreprise']}</h3>`,
                                 `<a href="../modificationGlobal/` + data['id'] + `"  > <i class="fas fa-edit"></i></a>`
                            ]).draw(false);
                            table.row.add([
                                `<label></label>
                                 <h4 style="margin-bottom: -2% !important;margin-top: -5% !important;font-size: 1.05rem !important;"><span class="openedcolor"></span>${data['IntituleProjet']}</h4>`,
                                 ``
                            ]).draw(false);
                            table.row.add([
                                `<label>Branche d'activitée</label>
                                <h5><span class="openedcolor"></span>${data['BrancheActivitee']}</h5>`,
                                `<label> Programme d'Investissement</label>
                                <h5><span class="openedcolor"></span>${data['ProgrammeInvestissement']}</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label> Date de signature</label>
                                <h5><span class="openedcolor"></span>${data['DateSignature']}</h5>`,
                                `<label> Date de lancement</label>
                                <h5><span class="openedcolor"></span>${someFormattedDate}</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label> Date d'échéance</label>
                                <h5><span class="openedcolor"></span>${someFormattedDate2}</h5>`,
                                `<label>Emplois prévus</label>
                                <h5><span class="openedcolor"></span>${data['EmploisPrevus']}</h5>
                               `
                              
                            ]).draw(false);
                            table.row.add([
                                `<label>Emplois réels</label>
                              
                                <h5><span class="openedcolor"></span>${data['Entreprise']}</h5>`,
                                 `<label>Mobilisation terrain</label>
                                 <h5><span class="openedcolor"></span>${data['MobilisationTerrain']}</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label>Paiement Terrain</label>
                              
                                <h5><span class="openedcolor"></span>${data['PaiementTerrain']}</h5>`,
                                 `<label>Autorisation de construire</label>
                                 <h5><span class="openedcolor"></span>${data['AutorisationConstruire']}</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label>Construction Pourcent</label>
                              
                                <h5><span class="openedcolor"></span>${data['Construction']}</h5>`,
                                 `<label>Etapes administratives</label>
                                 <h5><span class="openedcolor"></span>${data['EtapesAdministratives']}</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label>Prime d'impulsion</label>
                              
                                <h5><span class="openedcolor"></span>${PrimeIpulation}</h5>`,
                                 `<label> Prime Pourcent</label>
                                 <h5><span class="openedcolor"></span>${Math.round(PrimePourcentage * 100) / 100}%</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label>Prêt d'Honneur</label>
                              
                                <h5><span class="openedcolor"></span>${PretHonneur}</h5>`,
                                 `<label> Prêt d'Honneur Pourcent</label>
                                 <h5><span class="openedcolor"></span>${Math.round(PretHonneurPourcentage * 100) / 100}%</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label>Montant Prêt d'honneur débloqué </label>
                              
                                <h5><span class="openedcolor"></span>${data['MontantPretHonneurDebloque']}</h5>`,
                                 `<label>Date Prêt d'honneur débloqué </label>
                                 <h5><span class="openedcolor"></span>${data['DatePretHonneurDebloque']}</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label>PRET D'HONNEUR NON DEBLOQUE</label>
                              
                                <h4 style="margin-bottom: -2% !important;margin-top: 0% !important;font-size: 1.05rem !important;"><span class="openedcolor" ></span>${PretHonneurNonDebloque}</h4>`,
                                 `<label> Prêt d'Honneur  NON DEBLOQUE Pourcent</label>
                                 <h5><span class="openedcolor"></span>${Math.round(PretHonneurNonDebloquePourcent * 100) / 100}%</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label>1er VERSEMENT </label>
                              
                                <h5><span class="openedcolor"></span>${data['MontantVersement1']}</h5>`,
                                 `<label></label>
                                 <h5><span class="openedcolor"></span>${data['DateVersement1']}</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label>2ème  VERSEMENT </label>
                              
                                <h5><span class="openedcolor"></span>${data['MontantVersement2']}</h5>`,
                                 `<label></label>
                                 <h5><span class="openedcolor"></span>${data['DateVersement2']}</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label>3ème  VERSEMENT</label>
                              
                                <h5><span class="openedcolor"></span>${data['MontantVersement3']}</h5>`,
                                 `<label></label>
                                 <h5><span class="openedcolor"></span>${data['DateVersement3']}</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label>4ème  VERSEMENT</label>
                              
                                <h5><span class="openedcolor"></span>${data['MontantVersement4']}</h5>`,
                                 `<label></label>
                                 <h5><span class="openedcolor"></span>${data['DateVersement4']}</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label>5ème  VERSEMENT</label>
                              
                                <h5><span class="openedcolor"></span>${data['MontantVersement5']}</h5>`,
                                 `<label></label>
                                 <h5><span class="openedcolor"></span>${data['DateVersement5']}</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label>Prime d'impulsion débloques pourcent</label>
                              
                                <h5><span class="openedcolor"></span>${PrimeIpulationdebloquepourcent}%</h5>`,
                                 `<label>Total Prime d'impulsion débloquée </label>
                                 <h5><span class="openedcolor"></span>${PrimeIpulationdebloquepourcent*PrimeIpulation}</h5>`
                              
                            ]).draw(false);
                            table.row.add([
                                `<label>PRIME D'IMPUSLION NON DEBLOQUEE</label>
                              
                                <h5><span class="openedcolor"></span>${PRIMEIMPUSLIONNONDEBLOQUEE}</h5>`,
                                 `<label>Total Prime d'impulsion débloquée </label>
                                 <h5><span class="openedcolor"></span>${PrimeIpulationdebloquepourcent*PrimeIpulation}</h5>`
                              
                            ]).draw(false);
   
                     
                    
                          
                       
                       
    
                    },
                });
                
               
                
            });
        </script>
        <script  src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>
        <script src=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js">
        </script>
         <script src="https://kit.fontawesome.com/d9b0591cb3.js" crossorigin="anonymous"></script>
       
         </div>
      </div>
     
     
      
     
     
   
      <footer>
          <p class="text-center">Jabri Kaoutar. Job suggestion: jabrikaoutar1@gmail.com</p>
      </footer>
   </body>
 </html>