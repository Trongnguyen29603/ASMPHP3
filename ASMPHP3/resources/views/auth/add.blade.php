<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Plus:wght@700&family=Inter:wght@400;500&family=Roboto:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .lognin{
    margin: 0 auto;
    width: 500px;
    display: flex;
  justify-content: center;
  flex-direction: column;
  height: 600px;
  background-color: rgb(49, 174, 232);
  padding: 50px;
  border-radius: 15px;
}
.lognin button{
    margin-top: 20px;
}
.lognin h1{
    color: aliceblue;
}
.lognin p{
    margin-top: 10px;
    text-align: center;
}
.formcheck>.input-group{
   padding-top: 20px;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="lognin ">
            <h1 class=" ">WELCOME</h1>
         <form action="{{route('route_sigin_add')}}" class="formcheck" method="POST">
            @csrf
            <div class="input-group">
                <input type="text" name="name"  placeholder="name"  class="form-control"> 
              </div>
              <div class="input-group flex-nowrap">
                <input type="text" class="form-control" placeholder="Email" name="email" aria-label="Username" aria-describedby="addon-wrapping">
              </div>
              <div class="input-group flex-nowrap">
                <input type="text" class="form-control" placeholder="Password" name="password" aria-label="Username" aria-describedby="addon-wrapping">
              </div>
              <button type="submit" class="btn btn-primary">Sign-Up</button>
         </form>
     
          <p> DO YOU ALREADY HAVE AN ACCOUNT?<a href="{{route('route_login')}}">login</a></p>
          <p> DO YOU WANT HOME?<a href="index.html">Home</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>