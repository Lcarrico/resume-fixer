<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script>
  function showLoader() {
    var loader = document.getElementsByClassName('loader')[0];
    loader.style.display='inline';
  }

  </script>
  <style>
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
  <p>Copy and paste below the entire job description
    and a chart containing the top 25 skills to use in your resume will appear.<br>
    This includes hidden words which may not originally appear in the resume.</p>
</div>

<div class="container">
  <div class="row align-items-center">
    <div class="col-md-6 offset-md-3 content">
      <h3>Enter the Job Description Below</h3><br>
      <form action="visual.php" method="POST" id="form">
          <textarea class="form-control" rows="5" name="desc" placeholder="Write something here..."></textarea>
          <input class="button" type="submit" onclick="showLoader()" value="Let's Do This!">
      </form>
    </div>
  </div>
  <div class="row align-items-center loader">
    <div class="col-md-6 offset-md-3" style="text-align: center;">
      <h4> Loading.. </h4>
      <div class="loadbar"></div>
    </div>
  </div>
</div>
<br>

</body>
</html>
