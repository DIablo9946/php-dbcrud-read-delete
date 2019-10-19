<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crud read&delete</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.4.2/handlebars.js" integrity="sha256-hSzapznWRy/aOZkctlN03an9DxCLlN8ZCQS0lxntiHg=" crossorigin="anonymous"></script>
    <script  src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="container">
      <div class="box accepted">
        <h1>ACCEPTED Payments</h1>
      </div>
      <div class="box pending">
        <h1>PENDING Payments</h1>
      </div>
      <div class="box rejected">
        <h1>REJECTED Payments</h1>
      </div>
    </div>


  <script id="template" type="text/x-handlebars-template">
    <div class="paymentBox" data-id={{id}}>
      <p>Prezzo {{price}}</p>
      <button class="delButt">Delete Me</button>
    </div>
  </script>
  <script type="text/javascript" src="action.js"></script>
  </body>
</html>
