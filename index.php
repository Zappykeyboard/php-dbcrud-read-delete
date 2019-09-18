<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE-->
    <script id="pagamento-row" type="text/x-handlebars-template">
    <li class='pagamento-item' data-id={{id}}>
    id prestazione: {{prenotazione_id}} 
    id pagante: {{pagante_id}} 
    somma: {{price}}
    <button class='delete-button'> Elimina elemento</button>
    </li>
    </script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
    <title>Pagamenti</title>
  </head>
  <body> 

    
    <h1>PAGAMENTI HOTEL</h1>

    <div class="container">
      <h2>REJECTED</h2>
      <div class="pagamenti-container" id='rejected'>
        <ul></ul>
      </div>
    </div>

  <div class="container">
    <h2>PENDING</h2>
    <div class="pagamenti-container" id='pending'>
        <ul></ul>
    </div>
  </div>

  <div class="container">
    <h2>ACCEPTED</h2>
    <div class="pagamenti-container" id='accepted'>
        <ul></ul>
    </div>
  </div>
  </body>
</html>