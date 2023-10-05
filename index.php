<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>How To Use AJAX or Fetch</title>
        <style>
            .country-list { padding:0; margin:0;}
            .country-list li { list-style-type: none; display:block;}
        </style>
    </head>
    <body>
        <label>Using AJAX (jQuery)</label>
        <br>
        <input type="text" id="ajaxcountry" placeholder="Country Name">
        <br>
        <br>
        <label>Using Fetch (Vanilla JS)</label>
        <br>
        <input type="text" id="vanillacountry" placeholder="Country Name">
        <br>
        <ul class="country-list"></ul>
        <script src="/js/init.js"></script>
    </body>
</html>