const root_path = '.';

// Caching APP SHELL
const filesToCache = [
  // root_path+'/',
  // root_path+'/index.html',
  // root_path+'/toi.html',
  // root_path+'/app/',
  // root_path+'/service-worker.js',
  // root_path+'/manifest.json',
  // root_path+'/app/index.php',
  // root_path+'/app/assets/css/custom.css',
  // root_path+'/app/assets/css/style.css',
  // root_path+'/app/assets/img/logo.png',
  // root_path+'/app/404.php',
  // root_path+'/app/assets/js/howler/player.js',
  // root_path+'/app/offline.php',
  // root_path+'/app/assets/view/player.php',
  // root_path+'/app/assets/img/favicon.ico'
];

const staticCacheName = 'Intro Shell Cache';

// INSTALL
self.addEventListener('install', event => {
  console.log('Attempting to install service worker and cache static assets');
  event.waitUntil(
    caches.open(staticCacheName)
    .then(cache => {
      return cache.addAll(filesToCache);
    })
  );
});


self.addEventListener('activate', function (event) {
    event.waitUntil(
        caches.keys().then(function(keys){
            return Promise.all(keys.map(function(key, i){
                if(key !== staticCacheName){
                    return caches.delete(keys[i]);
                }
            }))
        })
    )
});

