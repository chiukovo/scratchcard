<!DOCTYPE html>
<html>
<head>
    <title>scratchcard</title>
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container" id="js-container">
  <canvas class="canvas" id="js-canvas" width="300" height="300"></canvas>
  <form class="form" style="visibility: hidden;">
    <h2>'Allo, 'Allo!</h2>
    <h3>The secret code is:</h3>
    <h1><code>HlkafSYc</code></h1>
    <div>
      <input type="text" name="code" placeholder="Secret Code">
    </div>
    <br>
    <div>
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/scratchcard.js"></script>
</html>