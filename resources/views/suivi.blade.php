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
        @font-face {font-family: "Effra"; 
src: url("//db.onlinewebfonts.com/t/f41eeef7f001b066c10e8597ddf6eca2.eot"); 
src:url("//db.onlinewebfonts.com/t/f41eeef7f001b066c10e8597ddf6eca2.woff2") format("woff2"); }
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
                    <li class="nav-item ">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Suivi</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
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
    
            </div>
        </section>
       
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

        <script type="application/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
    
                const $urlHolder = $('#url-holder');
    
                var table = $('#table_id').DataTable({
        "ordering": false,
     });
                $.ajax({
                    type: 'get',
                    url: $urlHolder.data('societe')+'/'+0,
                   
                    dataType: 'JSON',
                    success: function(data) {
                        
                        table.clear().draw();
                        $.each(data.result, function(key, val) {
                            table.row.add([
                                `<label>Entreprise</label>
                              
                                <h5><a href="" class="ainquiries">${val.Entreprise}</a></h5>`,
                                 `<label>Intitulé du Projet</label>
                                <h5><a href=""  class="ainquiries">${val.IntituleProjet}</a></h5>`,
                                `<label>Branche d'activitée</label>
                                <h5><span class="openedcolor"></span>${val.BrancheActivitee}</h5>`,
                                `<label> Programme d'Investissement</label>
                                <h5><span class="openedcolor"></span>${val.ProgrammeInvestissement}</h5>`,
                                `<label> Date de signature</label>
                                <h5><span class="openedcolor"></span>${val.DateSignature}</h5>`,
                                `<label> Date de lancement</label>
                                <h5><span class="openedcolor"></span>${val.DateLancement}</h5>`,
                                `<label> Date d'échéance</label>
                                <h5><span class="openedcolor"></span>${val.DateEcheance}</h5>`,
                                `<label>Emplois prévus</label>
                                <h5><span class="openedcolor"></span>${val.EmploisPrevus}</h5>`
                                
                                
                                
                               
                            ]).draw(false);
                       
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
        <script src="fancyTable.js"></script>
        <script type="text/javascript">
                  
            $(document).ready(function(){
              
                $("#tableID").fancyTable({
                   sortColumn:0,
                   /* Setting pagination or enabling */
                   pagination: false,
                       globalSearch:true,
                    /* Exclude 2nd column from global search.*/
                   globalSearchExcludeColumns: [2],
                   onInit:function(){                 
                   /* On initialization of table */
                                 console.log({ element:this });
                                    },
                   onUpdate:function(){
                   /* On update like search and sort of table */                  
                    console.log({ element:this });
                   }
                       });                            
            });            
        </script>
         </div>
      </div>
     
     
      
     
     
   
      <footer>
          <p class="text-center">Jabri Kaoutar. Job suggestion: jabrikaoutar1@gmail.com</p>
      </footer>
   </body>
 </html>