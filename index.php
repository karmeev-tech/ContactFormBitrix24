
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

</head>
<body>

<h3>Contact Form</h3>

<div class="container">

    <form action="webhook.php" method="post">
        <label for="fname">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.."> <br>

        <label for="UCompany">Company</label>
        <input type="text" id="ñompany" name="company" placeholder="Company.."> <br>

        <label for="mail">Email</label>
        <input type="text" id="email" name="email" placeholder="Your Mail..."> <br>

        <label for="numb">Number</label>
        <input type="text" id="numb" name="number" placeholder="Your Number..."> <br>

        <label for="subject">Subject</label>
        <textarea id="subj" name="subj" placeholder="Write something.." style="height:200px"></textarea> <br>

        <button type="submit">Îòïðàâèòü</button>

    </form>
</div>

</body>
</html>