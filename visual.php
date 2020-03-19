<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    #responsive-plot {
      width: 60%;
      height: auto;
      margin: auto;
    }
    h1 {
      color: #158f2e;
    }
    .cover {
      background-color: #333;
      color: #888;
    }
    body {
      background-color: #222;
      color: #888;
    }
    .content {
      text-align: center;
    }
    .button {
      background-color: #158f2e;
      border: none;
      color: white;
      padding: 8px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 10px 10px;
      cursor: pointer;
    }
    .loader{
      display: none;
    }


    .loadbar {
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid #158f2e;
      width: 120px;
      height: 120px;
      -webkit-animation: spin 1s linear infinite; /* Safari */
      animation: spin 1s linear infinite;
      margin:auto;
    }

    /* Safari */
    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
</head>
<body>
<div class="jumbotron text-center cover">
  <h1>Top Resume Words Based on Job Description</h1>
  <p> Below you will find your top scoring words </p>
</div>
<div style="text-align: center;">
  <?php
    // echo "started...";
    $text = trim(preg_replace('/\s\s+/', ' ', $_POST['desc']));
    $command = 'python test.py "'. $text . '"';
    // echo $command;
    $command = escapeshellcmd($command);
    $output = shell_exec($command);
    // echo $output;
    echo '<img id="responsive-plot" src="' . $output . '">';

    // $command = escapeshellcmd('rm ' . $output);
    // shell_exec($command);
  ?>
</div>
</body>
</html>
