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
      Notification.requestPermission().then((permission)=> {

        if(permission === "granted") alert("Thanks For Subscribe")
      })

    }
  </script>
  </body>
</html>