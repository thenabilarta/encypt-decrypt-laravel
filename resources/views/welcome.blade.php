<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
</head>

<body>
  <input type="text" id="inpute">
  <button id="encrypt">Encrypt</button>

  <p id="encryptedstring">Encryption Result</p>

  <input type="text" id="inputd">
  <button id="decrypt">Decrypt</button>

  <p id="decryptedstring">Decryption Result</p>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
</body>

</html>