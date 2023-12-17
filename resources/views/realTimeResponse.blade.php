
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="notyDiv">

    </div>




@vite('resources/js/app.js')
    <script>

        setTimeout(() => {
            console.log('raju');
           window.Echo.channel('testing').listen('.barikoiSocket',(e)=>{
            console.log(e);
            var div = document.getElementById('notyDiv');

             div.innerHTML += '<p> Mail sent successfully to <span style="color:red"> ' + e.data +' </span></p>';

           })
        }, 200);
    </script>
</body>
</html>
