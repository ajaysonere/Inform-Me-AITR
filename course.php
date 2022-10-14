<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 100%;      
        }
        .form_input{
            width: 400px;
            height: 300px;
            margin: 100px auto;
            background-color:skyblue;
            border-radius: 8px;
            box-shadow: 5px 5px 8px black;

        }
        .form-group{
            font-size: 18px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;            
            display: block;
            text-align: center;
            padding: 20px;

        }
         label{
            /* padding: 40px; */
            margin: 10px;
        }
        input{
            outline-color: skyblue;
          border-radius: 4px;
          border: none;
          padding: 5px;
          box-shadow: 5px 5px 5px black;
        }
        button{
            display: flex;
        } 
        .btn {
            margin-top: 30px;
            margin-left: 160px;
            align-self: end;
            padding: 10px 20px;
            outline-color: skyblue;
          border-radius: 4px;
          border: none;
          box-shadow: 5px 5px 5px black;
          cursor: pointer;
        }
    </style>
    <title>Courses </title>
</head>
<body>
    <div class="container">
      <div class="form_input">
         <form action="connection.php" method="POST">
            <div class="form-group">
            <label for="exampleInputEmail1">E-Mail &nbsp; </label>
             <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="uname" require>
           </div>
          <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" require>
          </div>
          <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
         </div>
         <button type="submit" class="btn btn-primary" value="login">Submit</button>
      </form>
    </div>
  </div>
</body>
</html>