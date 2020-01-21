<!DOCTYPE html>
<html>
<head> <?php require_once 'head.php' ?> </head>
<body>







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