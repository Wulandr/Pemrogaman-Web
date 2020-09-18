<!--TUGAS MEMBUAT FORM AKUN BARU-->

   
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Formulir Pendaftaran Akun Baru</title>
        <style>
            .center {
                margin: auto;
                width: 60%;
                padding: 50px;
            }
            .button{
                background-color: rgb(35, 93, 97);
                color: aliceblue;
                padding: 14px 20px;
                margin: 10px 0px;
                cursor: pointer;
                width:auto;
                border:none;
                border-radius:20px;
                
            }
            body{
                font-size:16px; 
                background-color:white; 
                text-align:justify;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                padding: 7px;
                margin:15px;
                text-align:center;
            }
            input[type=text] {  
              width: 350px;
              box-sixing: border-box;
              border: 2px solid #ccc;
              border-radius: 20px;
              font-size: 16px;
              background-color: white;
              padding: 12px 12px 12px 40px;

            }
            input[type=password]{
              width: 350px;
              box-sixing: border-box;
              border: 2px solid #ccc;
              border-radius: 20px;
              font-size: 16px;
              background-color: white;
              padding: 12px 12px 12px 40px;

            }
            input[type=Submit]{
                background-color: rgb(35, 93, 97);
                color: aliceblue;
                padding: 14px 20px;
                margin: 10px 0px;
                cursor: pointer;
                width:auto;
                border:none;
                border-radius:20px;
            }
            /*input[type=text]:focus {
              width: 100%;
            }*/
            #word3 {
                color: rgb(35, 93, 97);
            }
            @media screen and (max-width: 600px) {
                .col-25, .col-75, input[type=text] {
                    width: 100%;
                    margin-top: 0;
                }
                .col-25, .col-75, input[type=Submit] {
                    width: 100%;
                    margin-top: 0;
                }
                .col-25, .col-75, input[type=password] {
                    width: 100%;
                    margin-top: 0;
                }
}
        </style>
    </head>
    <body>
        <!--<form method="POST" action="submit3.php">
        <input type="Submit" value="SIGN IN" class="button" style="position: static;left: 92%;top: 4%;">
        </form>-->
        
        <div class="center">
        <img src="logo.png" width="400" height="70">
        <form class="center" method="POST" action="submit3.php">
        <h2 id="word3"><b>Create Account</b></h2>
        <input type="text" name="email" placeholder="Email :  "> </br>
        <input type="text" name="name" placeholder="Name :  "> </br>
        <input type="text" name="address" placeholder="Address :  "> </br>
        <input type="text" name="company" placeholder="Company :  "> </br>
        <input type="password" name="password" placeholder="Password :  "> </br>
        <input type="password" name="confirm password" placeholder="Confirm Password :  "> </br></br>
        <input type="Submit" value="SIGN UP" class="button">
        </form>        
        </div>

    </br>
    </body>
</html>


