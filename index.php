
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


<script src="/call.js"></script>

</head>
<body>

<h3>Contact Form</h3>

<div class="container">

    <!--<form onsubmit="call()" method="post">-->
        <label for="fname">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.."> <br>

        <label for="UCompany">Company</label>
        <input type="text" id="company" name="company" placeholder="Company.."> <br>

        <label for="mail">Email</label>
        <input type="text" id="email" name="email" placeholder="Your Mail..."> <br>

        <label for="numb">Number</label>
        <input type="text" id="numb" name="number" placeholder="Your Number..."> <br>

        <label for="subject">Subject</label>
        <textarea id="subj"  name="subj" placeholder="Write something.." style="height:200px"></textarea> <br>

        <button id="button" type="submit" onclick= >Send</button>
        <label id="result">Result</label>

    <!--</form>-->
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script>

function post(name,company,email,numb,subj) {
    $.ajax({
        url:"/webhook.php",
        method:"POST",
        data:{name:name,company:company,email:email,numb:numb,subj:subj},
        success:function(data){            
            console.dir(data);
            data_json=JSON.parse(data);
            
            $('#result').append('</br>' + data_json['error']+'</br>')
            $('#result').append('</br>' + data_json['error_description']+'</br>')
        }
    })    
}
$(document).ready(function() {    

    $(document).on('click', '#button', function() {    
        var name = $('#name').val();
        var company = $('#company').val();
        var email = $('#email').val();
        var numb = $('#numb').val();
        var subj = $('#subj').val();
        post(name,company,email,numb,subj);
        console.dir($('input'));

    });

});

</script>

</body>
</html>