<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/main.css">
        <style>
          .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 50%;
          } 
        </style>
    </head>
    <body>

      <form action="index.html" method="post" style="margin-top: 7%">
      
      <img src="images/logo.png" style="width:250px;height:80px;" class="center">
          <br><br><br>
        
        <fieldset>
          <legend><span class="number">1</span>Login</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">

          <button type="login"><a href="/dashadmin"> Login</button>
          <br>
        </fieldset>
      </form>
      
    </body>
</html>