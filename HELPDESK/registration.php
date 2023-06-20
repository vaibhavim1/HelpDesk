<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        
.container {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

h2 {
    text-align: center;
}

label {
    display: block;
    margin-top: 10px;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    margin-top: 5px;
}

input[type="submit"] {
    background-color: #9980FA;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

input[type="submit"]:hover {
    background-color: #9980FA;
}




    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="submit_form.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="company">Company Name:</label>
            <input type="text" id="company" name="company" required>

            <label for="phone">phone:</label>
            <input type="text" id="phone" name="phone" required>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label class="form-label" for="textAreaExample">Message</label>
  <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
 

            
            <input type="submit" value="Submit">


                   
        </form>
    </div>
</body>
</html>
