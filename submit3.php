<html>
<head>
<title>Submit</title>
</head>

<body>
<?php
    $email= $_POST['email'];
    $name = $_POST['name'];
    $address= $_POST['address'];
    $company = $_POST['company'];
    echo "E-mail : $email <br>";
    echo "Name : $name <br>";
    echo "Address : $address <br>";
    echo "Company : $company <br>";
?>
</body>
</html>