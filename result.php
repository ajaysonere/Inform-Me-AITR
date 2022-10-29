<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon1.png"/>
    <title>Result</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        div.container{
            width: 100%;
            height: 100vh;
            background-color: #fff;
        }
        div.result{
            width: 60%;
            height: 90vh;
            background-color: #ccc;
            margin: 50px auto;
           
        }
        div h1{
            text-align: center;
            width: 100%;
            height: 100px;
            line-height: 100px;
            font-size: 35px;
            color: #fff;
            background-color: skyblue;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        table.mytable{
            width: 100%;
            height: 76vh;
            background-color: #ccc;
        }
        table > thead > tr{
            width: 100%;
            height: 50px;
            background-color:blueviolet;
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            color: whitesmoke;
        }
    </style>
</head>
<body>
     <div class="container">
        <div class="result">
            <h1> Result Will Announce Soon ! </h1>
            <table class="mytable">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Team</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <tfoot></tfoot>
            </table>
        </div>
     </div>
</body>
</html>