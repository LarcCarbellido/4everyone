<!DOCTYPE html>
  <html>
    <head>
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">
      <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
      <link href="<?= base_url('assets/css/sidenav.css'); ?>" rel="stylesheet">     
    </head>

    <body>

    <nav class="white">
        <div class="container">
            <a href="#" data-target="slide-out" class="left sidenav-trigger  show-on-large deep-purple-text text-accent-3"><i class="material-icons">menu</i></a>

            <a href="#" class="brand-logo center"><img class="responsive-img" src="<?= base_url('assets/img/logo.png'); ?>"></a>

            <div class="right  font-rbt-cond">
             <a href="#ingresar" class="grey-text text-darken-2 hide-on-small-only">INGRESAR</a> 
             <span class="grey-text text-darken-4 hide-on-small-only">|</span>
             <a href="#unirse" class="deep-purple-text text-accent-3"><b>UNIRSE</b></a>
            </div>               
        </div>
    </nav>


        <header>
            <ul id="slide-out" class="sidenav">
                <li>
                <div class="brand-logo center">
                    <img class="responsive-img" src="<?= base_url('assets/img/logo.png'); ?>">
                </div>    
                </li>
                <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold waves-effect waves-purple"><a class="collapsible-header">Pages<i class="material-icons chevron">chevron_left</i></a>
                    <div class="collapsible-body">
                        <ul>
                        <li><a href="#" class="waves-effect waves-purple">Dashboard<i class="material-icons">web</i></a></li>
                        <li><a href="#" class="waves-effect waves-purple">Fixed Chart<i class="material-icons">list</i></a></li>
                        <li><a href="#" class="waves-effect waves-purple">Grid<i class="material-icons">dashboard</i></a></li>
                        <li><a href="#" class="waves-effect waves-purple">Chat<i class="material-icons">chat</i></a></li>
                        </ul>
                    </div>
                    </li>
                    <li class="bold waves-effect waves-purple"><a class="collapsible-header">Pages<i class="material-icons chevron">chevron_left</i></a>
                    <div class="collapsible-body">
                        <ul>
                        <li><a href="#" class="waves-effect waves-purple">Dashboard<i class="material-icons">web</i></a></li>
                        <li><a href="#" class="waves-effect waves-purple">Fixed Chart<i class="material-icons">list</i></a></li>
                        <li><a href="#" class="waves-effect waves-purple">Grid<i class="material-icons">dashboard</i></a></li>
                        <li><a href="#" class="waves-effect waves-purple">Chat<i class="material-icons">chat</i></a></li>
                        </ul>
                    </div>
                    </li>
                    <li class="bold waves-effect waves-purple"><a class="collapsible-header">Pages<i class="material-icons chevron">chevron_left</i></a>
                    <div class="collapsible-body">
                        <ul>
                        <li><a href="#" class="waves-effect waves-purple">Dashboard<i class="material-icons">web</i></a></li>
                        <li><a href="#" class="waves-effect waves-purple">Fixed Chart<i class="material-icons">list</i></a></li>
                        <li><a href="#" class="waves-effect waves-purple">Grid<i class="material-icons">dashboard</i></a></li>
                        <li><a href="#" class="waves-effect waves-purple">Chat<i class="material-icons">chat</i></a></li>
                        </ul>
                    </div>
                    </li>
                </ul> 
        </header>

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
             
            <h1 class="bold center white-text"><b>Asiste y crea experiencias para hacer el bien.</b> </h1>
       
            <div class="row center">
                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light deep-purple accent-3">Crea un evento</a>
            </div>
            <br><br>
        </div>
    </div>


    <div class="container">
        <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                <h5 class="center">Speeds up development</h5>

                <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
            </div>
            </div>

            <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                <h5 class="center">User Experience Focused</h5>

                <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
            </div>
            </div>

            <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                <h5 class="center">Easy to work with</h5>

                <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
            </div>
            </div>
        </div>

        </div>
        <br><br>
    </div>

    <footer class="page-footer orange">
        <div class="container">
        <div class="row">
            <div class="col l6 s12">
            <h5 class="white-text">Company Bio</h5>
            <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


            </div>
            <div class="col l3 s12">
            <h5 class="white-text">Settings</h5>
            <ul>
                <li><a class="white-text" href="#!">Link 1</a></li>
                <li><a class="white-text" href="#!">Link 2</a></li>
                <li><a class="white-text" href="#!">Link 3</a></li>
                <li><a class="white-text" href="#!">Link 4</a></li>
            </ul>
            </div>
            <div class="col l3 s12">
            <h5 class="white-text">Connect</h5>
            <ul>
                <li><a class="white-text" href="#!">Link 1</a></li>
                <li><a class="white-text" href="#!">Link 2</a></li>
                <li><a class="white-text" href="#!">Link 3</a></li>
                <li><a class="white-text" href="#!">Link 4</a></li>
            </ul>
            </div>
        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
        Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
        </div>
    </footer>

        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
        <script>
           $(document).ready(function(){
                $('.sidenav').sidenav();
                $('.collapsible').collapsible();
            });
                
        </script>
    </body>
  </html>