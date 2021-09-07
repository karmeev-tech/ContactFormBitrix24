
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>
<body>

<h3>Contact Form</h3>

<div class="container">

    <form action="webhook.php" method="post">
        <label for="fname">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.."> <br>

        <label for="UCompany">Company</label>
        <input type="text" id="company" name="company" placeholder="Company.."> <br>

        <label for="mail">Email</label>
        <input type="text" id="email" name="email" placeholder="Your Mail..."> <br>

        <label for="numb">Number</label>
        <input type="text" id="numb" name="number" placeholder="Your Number..."> <br>

        <label for="subject">Subject</label>
        <textarea id="subj" name="subj" placeholder="Write something.." style="height:200px"></textarea> <br>

        <button type="submit" onclick= >Send</button>
        <label>Result</label>

    </form>
</div>

//??????????? ?? ????? ???? ,,,,
<script>
var name = $("name").val();
var comp = $("company").val();
var mail = $("email").val();
var numb = $("numb").val();
var subj = $("subj").val();
</script>

//ajax 
<script>
  function makeXHR() {
            let first = document.querySelector('.first').value,
                last = document.querySelector('.last').value,
                xhr = new XMLHttpRequest(); // создание объекта для работы с асинхронными запросами
            xhr.onreadystatechange = function () {
                if(xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('result').innerHTML=xhr.responseText;
                }

            };
            // формирование запроса
            xhr.open('GET', "webhook.php?a="+first+"&b="+last, true);
            // отпавка запроса
            xhr.send();
        }
</script>

</body>
</html>