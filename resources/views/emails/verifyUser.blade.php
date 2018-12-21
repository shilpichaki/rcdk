<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Email</title>
  </head>
  <body>
    <h2>Welcome to the site {{$subbroker['name']}}</h2>
    <br/>
    Your registered email-id is {{$subbroker['email']}} , Please click on the below link to verify your email account
    <br/>
    <a href="{{url('subbroker/verify', $subbroker->userActivation->token)}}">Verify Email</a>
  </body>
</html>