 <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Succesfully</title>
    <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins',sans-serif;
    }
    .container{
    width: 100%;
    height:100vh;
    background-color: #90aeac;
    display: flex;
    align-items: center;
    justify-content: center;
   }
   .btn{
    padding: 10px 60px;
    background: #fff;
    border: 0;
    outline: none;
    cursor: pointer;
    font-size: 22px;
    font-weight: 500;
    border-radius: 30px;
   } 
   .popup{
  width: 400px;
  background: #fff;
  border-radius: 6px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%) scale(1);
  text-align: center;
  padding: 0 30px 30px;
  color:#333;
  transition:transform 0.4s,top 0.4s ;
}
.popup img {
  width: 100px;
  margin-top:-50px;
  border-radius: 50%;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}
.popup button {
  width:100% ;
  margin-top: 50px;
  padding: 10px 0;
  border: 0;
  outline: 0;
  font-size:18px;
  border-radius: 4px;
  cursor: pointer;
  box-shadow: 7px 6px 8px skyblue;

}
.popup button a{
  text-decoration: none;
  color: black;
}
.popup button a :hover{
  text-decoration: solid;
  border: 3px solid blue;
}
.popup h2{
  font-size: 38px;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  font-weight: 500;
  margin: 30px 0 10px;

}
 </style>
  </head>
  <body>  
    <div class="container">
       <div class="popup" id="popup"> 
        <img src="tick.png" alt="">
        <h2>Register Successfully</h2>
        <p>Your details has been submited . Thanks </p>
        <button type="button"><a href="form.php" onclick="closepopup()">OK</a></button>
      </div>
    </div>
  </body>
  </html>
  ?>