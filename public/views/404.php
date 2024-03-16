<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 Page Not Found</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f7f7f7;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      text-align: center;
    }

    h1 {
      font-size: 6em;
      margin: 0;
      color: #333;
    }

    p {
      font-size: 1.5em;
      color: #666;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-size: 1.2em;
      transition: background-color 0.3s;
    }

    .button:hover {
      background-color: #45a049;
    }

    @media only screen and (max-width: 600px) {
      h1 {
        font-size: 4em;
      }

      p {
        font-size: 1.2em;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="error-icon">
      <!-- You can place an error icon here if you wish -->
    </div>
    <h1>404</h1>
    <p>Oops! Page not found.</p>
    <a href="/" class="button">Go Home</a>
  </div>
</body>

</html>