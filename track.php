<!DOCTYPE html>
<html>
<head>
    <title>Speed Courier Tracking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
           
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }
        
        .container h2 {
            text-align: center;
        }
        
        .container input[type="text"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
        }
        
        .container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        
        .container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-body-primary">
  <div class="container-fluid">
    <a class="navbar-brand">courier service</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    <div class="container">
        <h2>Speed Courier Tracking</h2>
        <form method="POST">
            <input type="text" name="tracking_number" placeholder="Tracking Number" required><br>
            <input type="submit" class="btn btn-info" value="track">
        </form>
    </div>

    <div class="card" class="style="bgr-clr:#f1f1f1" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><span><a href="#">track your location</a></span></li>
    <li class="list-group-item"><span><a href="#">find tracker</a></span></li>
    <li class="list-group-item"><span><a href="#">premium</a></span></li>
  </ul>
  <br></div>
  <div class="mb-3" align="center">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  
  <table class="table" align="center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><label><input type="fname" placeholder="username"></label></td>
      <td><label><input type="password" value="" placeholder="password"></label></td>
      <td><label><input type="submit" method="post" btn-btn-secondary value="submit"></label></td>
    </tr>
    
  </tbody>
</table>
  
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  






    <?php
session_start();

// Generate a random string for CAPTCHA
function generateCaptchaString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $captchaString = '';

    for ($i = 0; $i < $length; $i++) {
        $captchaString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $captchaString;
}

// Generate a random CAPTCHA string
$captchaString = generateCaptchaString();

// Store the CAPTCHA string in the session for verification
$_SESSION['captcha'] = $captchaString;

// Create the CAPTCHA image
$image = imagecreatetruecolor(200, 80);
$bgColor = imagecolorallocate($image, 255, 255, 255);
$textColor = imagecolorallocate($image, 0, 0, 0);
imagefilledrectangle($image, 0, 0, 200, 80, $bgColor);
imagettftext($image, 40, 0, 20, 60, $textColor, 'path_to_your_font.ttf', $captchaString);

// Save the CAPTCHA image to a file
$imageFilePath = 'captcha.png';
imagepng($image, $imageFilePath);
imagedestroy($image);

// Use Tesseract OCR for code recognition
$recognizedCode = shell_exec('tesseract ' . $imageFilePath . ' stdout');

// Clean up the recognized code (remove line breaks and white spaces)
$recognizedCode = trim(preg_replace('/\s+/', '', $recognizedCode));

// Output the recognized code
echo "Recognized CAPTCHA code: " . $recognizedCode;

</body>
</html>
