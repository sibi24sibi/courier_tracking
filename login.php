<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-image: url('dwnd.jpg');
      background-size: cover;
    }
    
    .login-panel {
      position: absolute;
      top: 50%;
      right: 0;
      transform: translateY(-50%);
      background-color: white;
      padding: 20px;
      width: 300px;
    }
    
    .login-panel input[type="text"],
    .login-panel input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }
    
    .login-panel input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
    }
  </style>
</head>
<body>
  <div class="login-panel">
    <h2>Login</h2><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-dash-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM6 9.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6z"/>
</svg>
    <form>
      <input type="text" placeholder="Username" required>
      <input type="password" placeholder="Password" required>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
