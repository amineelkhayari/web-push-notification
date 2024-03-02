<html>
  <head>
    <title>Web Service Push Notification Using PHP Rest Api</title>
  </head>
  <body>
   
    <h1>Web Service Push Notification Using PHP Rest Api</h1>
    <p>This is a simple web service that can send push notification to your mobile using PHP Rest Api.</p>
    <button onclick="EnableNotification()">
      Enable Push Notification
    </button>
 
  <script>
    navigator.serviceWorker.register("ServerWorker.js");


    const EnableNotification = () => {
       Notification.requestPermission().then((permission) => {

          if (permission === 'granted') {
             // get service worker
             navigator.serviceWorker.ready.then((sw) => {
                // subscribe
                sw.pushManager.subscribe({
                   userVisibleOnly: true,
                  //pulic Key From Token generator
                   applicationServerKey: "BAjrwSGHu5nCW2nE1u9MmdUXZosDWIByptd0pZQF0P-7zfwuP7eCAIgtViBUDMixfpvcZyykTnkzDoxcuFV2QD4"
                }).then((subscription) => {
                   console.log(JSON.stringify(subscription));
                   //document.write(JSON.stringify(subscription));
                });
             });
          }
       })

    }
  </script>
  </body>
</html>