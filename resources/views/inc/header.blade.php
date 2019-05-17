
<!DOCTYPE html>
<html lang="en">
    
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
            <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
            <!--css that created by me-->
            <link rel="stylesheet" href="css/main.css">
        
            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            
            <!--Bootsrap cdn-->
                        <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

            <!-- Popper JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

            <title>title</title>
        
        </head>
    
<body>
        <div class="navbar-fixed">

        <nav class="teal">
            <div class="container">
            
                <div class="nav-wrapper">
            
                <a href="#" class="brand-logo">Logo</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                <ul  class="right hide-on-med-and-down">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/create')}}">Create</a></li>
                    <li><a href="#">JavaScript</a></li>
                </ul>
                </div>
            </div>
        </nav>

        </div>

        <ul class="sidenav teal darken-2" id="mobile-nav" >
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/create')}}">Create</a></li> <!--this is for create page-->
        <li><a href="#">JavaScript</a></li>
        </ul>

       

        <!--JavaScript at end of body for optimized loading-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>

        //side nave decleration for mobiles
        const sideNav=document.querySelector('.sidenav');
        console.log(sideNav);
        //console.log(sideNav) 
        //it returns the  71 to 93 code 

        //in their 'sidenav' is the class name
        //'sideNav' is the constant variable
        M.Sidenav.init(sideNav,{});
        //"M" is for materialize and init for initialize 
        // {} for option (object ) keep it rest


        </script>
