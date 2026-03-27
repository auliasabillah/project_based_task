<html>
    <head>
        <title>Form Sederhana</title>
        <style>
            body{
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
            }
            button{
                display: block;
                margin: 5px auto;
                color: blue;
            }
        </style>
    </head>
    <body>
        <form action= "proses.php" method= "POST">
            <input type= "text" name= "firstname" placeholder="Firstname"><br>
            <input type= "text" name= "lastname" placeholder="Lastname"><br>
            <input type= "text" name= "phonenumber" placeholder="Phone Number"><br>
            <textarea name="address" placeholder="Address"></textarea>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>