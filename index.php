<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

    <div class="container">
    
      <div class="row  justify-content-center" >
    <div class="card w-25">
      
      <center>
      <div class="card-header">
  <h1>login form</h1>


</div>

<div class="card-body">
<form action="connect.php" method="post">
    <div class="mb-3">
  <div class="form-group">

  <label for="name">Name</label>
  <input type="text" id="name" name="name" >
  </div>
  </div>
  <div class="mb-3">
  <div class="form-group">

  <label for="email">Email</label>
  <input type="text" id="email" name="email" >
  </div>
  </div>
  <div class="mb-3">
   <div class="form-group">
  <label for="password">Password</label>
  <input type="text" id="password" name="password" >
  </div>
  </div>
    <br>
    <div class="mb-3">
    <label for="gender">Gender</label>
    <select name="gender" id="gender">
      <option value="male">male</option>
      <option value="female">female</option>
</select>
    </div>
<br><br>
<button type="submit" class="btn btn-primary">submit</button>

</form>


</div>
</center>
<div class="card-footer">

   <small>$copy; Ankit karapurkar</small>
   </div>
</div>

    </div>
    </div>
    

      
      
      
</body>
</html>
