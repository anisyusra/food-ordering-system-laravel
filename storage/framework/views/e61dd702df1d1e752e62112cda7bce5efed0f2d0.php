<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <title>Welcome</title>
        <!-- Stylesheet -->
        
        <style>

            body{
                padding: 0;
                margin: 0;
                background-color: 	#F5DEB3;
            }

            #btn1{
                background-color: #87CEFA;
                border: none;
                position: absolute;
               
                top: 60%;
                left: 40%;
                padding: 20px 50px;
                font-size: 30px;
                font-weight: bold;
            }

            #btn2{
                background-color: #FF69B4;
                border: none;
                position: absolute;
               
                top: 60%;
                left: 65%;
                padding: 20px 50px;
                font-size: 30px;
                font-weight: bold;
            }

            #btn3{
                background-color: #FF69B4;
                border: none;
                position: absolute;
              
                top: 60%;
                left: 95%;
                padding: 20px 50px;
                font-size: 30px;
                font-weight: bold;
            }

            .btn-group button {
                color: black; /* White text */
                padding: 10px 24px; 
                cursor: pointer; /* Pointer/hand icon */
                width: 20%; /* Set a width if needed */
                display: block;
                top: 60%;
                border-radius:40%
            }

            h1{
                color: #000000;
                border: none;
                position: absolute;
                top: 10%;
                left: 28%;
                padding: 20px 50px;
                font-size: 50px;
                font-weight: bold;
            }
        </style>
    </head>

    <body>

    <h1>Food Ordering System (FOS)</h1>
    <br>
    
    <div class="btn-group">
    <tr>
        <a href="<?php echo e(route('home')); ?>">
        <button type="button" id="btn1" >Admin</button> 
    </a>       
    </tr>
<tr>
 <a href="<?php echo e(route('FrontHome')); ?>">
        <button type="button" id="btn2" >User</button> 
    </a>
</tr>

<tr>
 <a href="<?php echo e(route('FrontHome')); ?>">
        <button type="button" id="btn3" >User</button> 
    </a>
</tr>
   
</div>


  
    </body>
</html><?php /**PATH C:\laragon\www\online_food_ordering\resources\views/button.blade.php ENDPATH**/ ?>