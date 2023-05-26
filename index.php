<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
</head>
<body>
    

<form action="send.php" method="post" class="container mt-5" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1"> To Email address</label>
    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Subject</label>
    <input type="text" class="form-control" name="subject" id="exampleFormControlInput1" placeholder="Enter the Subject">
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Body</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" placeholder="Hello hi..." rows="5"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Select a File</label>
    <input type="file" id="myfile" name="image"><br><br><br>


  <input type="submit" class="btn btn-primary" value="Send Message" name="send">
</form>

</body>
</html>