<html>
    <head>
        <title>Form Sederhana</title>
        <style>
            body{
                display: flex;
                flex-direction:column;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                margin: 0;
                font-family: Arial:
            }
            form{
                border: 1px solid #ccc;
                padding: 20px;
                border-radius: 10px;
            }
            input,textarea{
                display: block;
                margin: 10px 0;
                padding: 8px;
                width: 250px;
            }
            button{
                display: block;
                margin: 5px auto;
                padding: 8px 15px;
            }
            .output{
                margin-top: 20px;
                padding: 15px;
                border: 1px solid #ccc;
                border-radius: 10px;
                width: 250px;
            }
        </style>
    </head>
    <body>
        <form method= "POST">
            <input type= "text" name= "firstname" placeholder="Firstname" required>
            <input type= "text" name= "lastname" placeholder="Lastname" required>
            <input type= "text" name= "phonenumber" placeholder="Phone Number" required>
            <textarea name="address" placeholder="Address" required></textarea>
            <button type="submit">Submit</button>
        </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

class User {
    public $firstname;
    public $lastname;
    public $phonenumber;
    public $address;

    public function setFirstName($firstname){
        $this->firstname = $firstname;
    }
    public function setLastName($lastname){
        $this->lastname = $lastname;
    }
    public function setPhoneNumber($phonenumber){
        $this->phonenumber = $phonenumber;
    }
    public function setAddress($address){
        $this->address = $address;
    }

    public function hasil(){
        return "Hi, My name is " . $this->firstname ." ". $this->lastname ."<br>" .
               "Phone Number: " . $this->phonenumber . "<br>" .
               "Address: " . $this->address . "<br>";
    }
}

    $proses = new User();
    $proses->setFirstName($_POST["firstname"]);
    $proses->setLastName($_POST["lastname"]);
    $proses->setPhoneNumber($_POST["phonenumber"]);
    $proses->setAddress($_POST["address"]);
?>

<div class="output">
    <h3>Hasil Input:</h3>
    <?php echo $proses->hasil(); ?>
</div>

<?php } ?>

    </body>
</html>