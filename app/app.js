// Service Worker Registration

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

// Page Indexing

index();
var playlists;
function index()
    {
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                playlists = JSON.parse(this.responseText);

                var str = "";
                
                for (var i = 0; i < playlists.length; i++) {
                   
                    str += " <div class=\"mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-card mdl-shadow--4dp \"><div class=\"mdl-card__media\"><a href=\""+playlists[i].url+"\"> <img class=\"article-image\" src=\""+playlists[i].picture+"\" border=\"0\" alt=\"\"></a></div> <div class=\"mdl-card__title \"><h2 class=\"mdl-card__title-text\"> "+playlists[i].title+" </h2></div> <div class=\"mdl-card__supporting-text\"><p>"+playlists[i].artist+"</p></div></div> ";
                    console.log(playlists[i]);

                }
            
                document.getElementById('content').innerHTML = str;
            
            }
        };

        xmlhttp.open("GET", "main.php?function=" + 'index', true);
        xmlhttp.send();



    }
        

