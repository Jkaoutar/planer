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
    <div id="url-holder" data-societe="{{ route('get_societe') }}"></div>
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
         <section class="inquirisec">
            <div class="container">
              
                <table class="table inquirytable" id="table_id">
                    <thead >
                        <tr>
                            <th class="td" style="visibility:hidden" >  </th>
                            <th class="td" style="visibility:hidden"> </th>
                            <th class="td" style="visibility:hidden"></th>
                            <th class="td" style="visibility:hidden"></th>
                            <th class="td" style="visibility:hidden" >  </th>
                            <th class="td" style="visibility:hidden" >  </th>
                            <th class="td" style="visibility:hidden" >  </th>
                            <th class="td" style="visibility:hidden" >  </th>
    
                        </tr>
                       
                    </thead>
    
                </table>
                <table class="table inquirytable" id="table">
                    <thead >
                        <tr>
                            <th class="td" colspan= "2" style="visibility:hidden" >  </th>
                            <th class="td" colspan= "2" style="visibility:hidden" >  </th>
                            <th class="td" colspan= "2" style="visibility:hidden" >  </th>
                            <th class="td" colspan= "2" style="visibility:hidden" >  </th>
                           
    
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
               
                var table = $('#table_id').DataTable({
     });
    
    /* 
     var table2 = $('#table').DataTable({
    }); */
  
    
                $.ajax({
                    type: 'get',
                    url: $urlHolder.data('societe')+'/'+0,
                   
                    dataType: 'JSON',
                    success: function(data) {
                        
                        table.clear().draw();
                        $.each(data.result, function(key, val) {
                            var date = new Date(val.DateSignature);
                           
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
                            table.row.add([
                                `<label>Entreprise</label>
                              
                                <h5><span class="openedcolor"></span>${val.Entreprise}</h5>`,
                                 `<label>Intitulé du Projet</label>
                                 <h5><span class="openedcolor"></span>${val.IntituleProjet}</h5>`,
                                `<label>Branche d'activitée</label>
                                <h5><span class="openedcolor"></span>${val.BrancheActivitee}</h5>`,
                                `<label> Programme d'Investissement</label>
                                <h5><span class="openedcolor"></span>${val.ProgrammeInvestissement}</h5>`,
                                `<label> Date de signature</label>
                                <h5><span class="openedcolor"></span>${val.DateSignature}</h5>`,
                                `<label> Date de lancement</label>
                                <h5><span class="openedcolor"></span>${someFormattedDate}</h5>`,
                                `<label> Date d'échéance</label>
                                <h5><span class="openedcolor"></span>${someFormattedDate2}</h5>`,
                                `<label>Emplois prévus</label>
                                <h5><span class="openedcolor"></span>${val.EmploisPrevus}</h5>
                               `
                                
                                
                                
                               
                            ]).draw(false);
                           
   
                          /*  table2.row.add([
                                `<label style="color: black; background-color : #d1d1d1" ><B>Avancement dans le projet</B></label>
                              
                                <h5><span class="openedcolor" ></span></h5>
                                `,

                                 `<label><B>Montants accordés dans le cadre du FIET</B></label>
                                 <h5><span class="openedcolor"></span></h5>`,
                                `<label><B>Branche d'activitée</B></label>
                                <h5><span class="openedcolor"></span></h5>
                                `,
                                `<label><B>Montants débloqués</B></label>
                                <h5><span class="openedcolor"></span></h5>
                                `,
                              
                                
                                
                                
                               
                            ]).draw(false);*/
                            
                            
                          
                       
                        });
    
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
       
         </div>
      </div>
     
     
      
     
     
   
      <footer>
          <p class="text-center">Jabri Kaoutar. Job suggestion: jabrikaoutar1@gmail.com</p>
      </footer>
   </body>
 </html>