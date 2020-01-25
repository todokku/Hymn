<!DOCTYPE html>
<html>
<head> <?php require_once 'head.php' ?> </head>
<body>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--waterfall portfolio-header">
            <div class="mdl-layout__header-row portfolio-logo-row" style="background: white;">
                <!-- <span class="mdl-layout__title"> -->
                    <img src="src/img/logo.png" style="height: 100%; padding-left: 10%; ">
                    <!-- <span class="mdl-layout__title">Simple portfolio website</span> -->
                <!-- </span> -->
            </div>
            <div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
                <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                    <a class="mdl-navigation__link is-active" href="index.html">Portfolio</a>
                    <a class="mdl-navigation__link" href="blog.html">Blog</a>
                    <a class="mdl-navigation__link" href="about.html">About</a>
                    <a class="mdl-navigation__link" href="contact.html">Contact</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                <a class="mdl-navigation__link is-active" href="index.html">Portfolio</a>
                <a class="mdl-navigation__link" href="blog.html">Blog</a>
                <a class="mdl-navigation__link" href="about.html">About</a>
                <a class="mdl-navigation__link" href="contact.html">Contact</a>
            </nav>
        </div>



        <main class="mdl-layout__content">
            <div class="mdl-grid portfolio-max-width">
                <div id="content" class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-card mdl-shadow--4dp">
            
                
     
            </div>
 	      

        </main>

       <div id="playerControls" class="mdl-layout__header-row " style="padding-left: 15%;">

                        <button 
                    class="mdl-button mdl-js-button mdl-button--icon"
                    onclick="if(sound.volume < 1) sound.volume = sound.volume + 0.1;" 
                    id="howler-volup">
                    +
                  </button>

                  <button 
                    class="mdl-button mdl-js-button mdl-button--icon"
                    onclick="playOrResume(sound.src);"
                    id="howler-pause">
                    <i class="material-icons">pause</i>
                  </button>

                  <button 
                    class="mdl-button mdl-js-button mdl-button--icon"
                    onclick="if(sound.volume > 0.1) sound.volume = sound.volume - 0.1;" 
                    id="howler-voldown">
                    -
                  </button>
                  

      </div>
      

    </div>


<script type="text/javascript" src="app.js"></script>
</body>
</html>