<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Form Suggestion</title>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <h1>Honkai StarRail Character</h1>
      <form action="" method="GET">
         <p>Enter a name:</p>
         <input onkeyup="showHint(this.value)"  id="inputField" type="text" />
      </form>
      <p>Suggestion: <span id="hintText"></span></p>
      <script src="script/hint.js"></script>
   </body>
</html>
