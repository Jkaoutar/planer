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
         <div class="container" style="margin-top:5%;">
            <div class="row">
                  <div class="col-12 col-md-4 col-lg-4 col-xl-4 div " style="background-color: #e0bca8;     height: 221px;" >
                     <a href="{{ route('suivi') }}" style="position: absolute;
                     left: 50%;
                     top: 50%;
                     -webkit-transform: translate(-50%, -50%);
                     transform: translate(-50%, -50%);" >
                        <div href="#" class="word" data-text="uivi">S</div>
                        <div href="#" class="word" data-text="AFAA">D</div>
                     </a>
                   </div>
                  <div class="col-12 col-md-4 col-lg-4 col-xl-4  div" style="background-color:#d6a68b;">
                    <a href="{{ route('ajouter') }}" style="position: absolute;
                    left: 50%;
                    top: 50%;
                    -webkit-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);" >
                       <div href="#" class="word" data-text="jouter">A</div>
                       <div href="#" class="word" data-text="es onn??es">D</div>
                    </a>
                   </div>
                    <div class="col-12 col-md-4 col-lg-4 col-xl-4 div " style="background-color:#efded3;">
                      <a href="{{ route('modification') }}" style="position: absolute;
                      left: 50%;
                      top: 50%;
                      -webkit-transform: translate(-50%, -50%);
                      transform: translate(-50%, -50%);" >
                          <div href="#" class="word" data-text="odifier">M</div>
                          <div href="#" class="word" data-text="es onn??es">D</div>
                      </a>
                   </div>
             </div>
             <div class="row">
                   <div class="col-12 col-md-4 col-lg-4 col-xl-4 div " style="background-color:#f5e9e2;">
                    <a href="#" style="position: absolute;
                    left: 50%;
                    top: 50%;
                    -webkit-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);" >
                       <div href="#" class="word" data-text="tatistic">S</div>
                       <div href="#" class="word" data-text="AFAA">D</div>
                    </a>
                    </div>
                   <div class="col-12 col-md-4 col-lg-4 col-xl-4 div"  style="background-color:#3b291f;">
                    <a href="#" style="position: absolute;
                    left: 50%;
                    top: 50%;
                    -webkit-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);" >
                       <div href="#" class="word" data-text="jouter">A</div>
                       <div href="#" class="word" data-text="es onn??es">D</div>
                    </a>
                    </div> 
                     <div class="col-12 col-md-4 col-lg-4 col-xl-4 div"  style="background-color:#8d5735;     height: 221px;">
                      <a href="#" style="position: absolute;
                      left: 50%;
                      top: 50%;
                      -webkit-transform: translate(-50%, -50%);
                      transform: translate(-50%, -50%);" >
                         <div href="#" class="word" data-text="jouter">A</div>
                         <div href="#" class="word" data-text="es onn??es">D</div>
                      </a>
                    </div>
              </div>
         </div>
      </div>
     
     
      
     
     
   
      <footer>
          <p class="text-center">Jabri Kaoutar. Job suggestion: jabrikaoutar1@gmail.com</p>
      </footer>
   </body>
 </html>
