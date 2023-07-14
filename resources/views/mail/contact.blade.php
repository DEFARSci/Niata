<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Lettre</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
    
     
    }

    header {
      text-align: center;
   
    }

    h1 {
      font-size: 24px;
      margin: 0;
    }

    .text {
        height:50px ;
        margin: 10px;
    }

    footer {
      text-align: center;
      
      background-color: rgba(211, 211, 211, 0.37);
    }
    .container {
      display: flex;
      
    }

    .box1 {
      width: 10%;
      background-color: rgba(211, 211, 211, 0.37);
      margin-right: 10px;
     
    }
    .box2 {
        width: 10%;
      background-color: rgba(211, 211, 211, 0.37);
    }
    .boxm {
        width: 80%;
      
    }
  </style>
</head>
<body>
  <header>
    <h1>Niata</h1>
  </header>

    <div class="container">
        <div class="box1"></div>
        <div class="boxm">
    <p>Date: <strong>{!!$date!!}</strong></p>
     <p> <strong> Vous avez reçu un message de  </strong> {!!$formName!!} {!!$formlastname !!} </p>
        <p>email: {!!$fromEmail!!}</p>
    <p class="text">Cher(e) admin,</p>

    <p>{!!$body!!}</p><br>

    <p>{!!$formName!!} {!!$formlastname !!}</p>
   

  
</div>
  <div class="box2"></div>

</div>

  <footer>
    <p>&copy; 2023 Niata. Tous droits réservés.</p>
  </footer>
</body>
</html>
