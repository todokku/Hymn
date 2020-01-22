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

       <div id="playerControls" class="mdl-layout__header-row ">

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
      


        <main class="mdl-layout__content">
            <div class="mdl-grid portfolio-max-width">
                <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__media mdl-cell mdl-cell--12-col-tablet">
                        <img class="article-image" src=" images/example-blog01.jpg" border="0" alt="">
                    </div>
                    
                    <div class="mdl-cell mdl-cell--8-col">
                        <h2 class="mdl-card__title-text">Velit anim eiusmod labore sit amet</h2>
                        <div class="mdl-card__supporting-text padding-top">
                            <span>Posted 2 days ago</span>
                            <div id="tt1" class=" icon material-icons portfolio-share-btn">share</div>
                            <div class="mdl-tooltip" for="tt1">
                                Share via social media
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text no-left-padding">
                            <p>Excepteur reprehenderit sint exercitation ipsum consequat qui sit id velit elit. Velit anim eiusmod labore sit amet. Voluptate voluptate irure occaecat deserunt incididunt esse in. Qui ullamco consectetur aute fugiat officia ullamco proident Lorem ad irure. Sint eu ut consectetur ut esse veniam laboris adipisicing aliquip minim anim labore commodo.</p>
                            <span>Category: <a href="#">Latest</a></span>
                        </div>
                    </div>

                </div>
                
                <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-card mdl-shadow--4dp ">
                    <div class="mdl-card__media">
                        <a href="#"> <img class="article-image" src=" images/example-blog04.jpg" border="0" alt=""></a>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <small>Excepteur reprehenderit sint exercitation ipsum consequat qui sit id velit elit.</small>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <p>Velit anim eiusmod labore sit amet. Voluptate voluptate irure occaecat deserunt incididunt esse in. Qui ullamco consectetur aute fugiat officia ullamco proident Lorem ad irure. Sint eu ut consectetur ut esse veniam.</p>
                    </div>
                </div>
                
                <div class="mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet mdl-card  mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__title mdl-card--expand portfolio-blog-card-strip-bg mdl-color-text--white">
                        <h2 class="mdl-card__title-text">adipiscing</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenan convallis.
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">
                          View Updates
                        </a>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-card  mdl-card mdl-shadow--4dp portfolio-blog-card-compact">
                    <div class="mdl-card__media">
                        <img class="article-image" src=" images/example-blog07.jpg" border="0" alt="">
                    </div>
                    <div class="mdl-card__title ">
                        <h2 class="mdl-card__title-text">Loren</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenan convallis.
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">
                          View Updates
                        </a>
                    </div>
                </div>
            </div>
 	
        </main>
    </div>




<!-- ServiceWorker Registration -->

  <script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
          navigator.serviceWorker.register('service-worker.js')
          .then(registration => {
            console.log('App is ready!', registration);
          })
          .catch(err => {
            console.error('Application Failed to register', err);
          });
        });
      }

      navigator.serviceWorker.register('service-worker.js', {
        scope: '.'
      });
  </script>

</body>
</html>