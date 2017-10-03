<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <style>
        body {
            height: auto;
            background-repeat: no-repeat;
            background: red; /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(red, yellow); /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(red, yellow); /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(red, yellow); /* For Firefox 3.6 to 15 */
            background: linear-gradient(red, yellow); /* Standard syntax (must be last) */
        }
        form{
            font-family: 'Indie Flower', cursive;
            font-size: 214%;
            background: red; /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left, cyan , yellow); /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(right, cyan, yellow); /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(right, cyan, yellow); /* For Firefox 3.6 to 15 */
            background: linear-gradient(to right, cyan , yellow); /* Standard syntax */

        }
        input[type=text] {
            font-family: 'Indie Flower', cursive;
            font-size: 100%;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type=button] {
            font-family: 'Indie Flower', cursive;
            font-size: 100%;
            width: 100%;

            box-sizing: border-box;
        }
    </style>
    <script>
        function sendDataByGET() {
            if(!document.postingDataForm.nametxt.value)
            {
                alert('There is nothing with no name');
                document.postingDataForm.nametxt.focus();
            }
            else
            {
                document.postingDataForm.submit();
            }
        }
        window.onload=function () {
            document.getElementById('sendButton').onclick=sendDataByGET;
        }
    </script>
</head>
<body>
    <form name="postingDataForm"
          action="serv.php"
          method="get"
    enctype="application/x-www-form-urlencoded">

        Plase Enter your name
        <br>
        <input type="text" name="nametxt"/>
        <br>
        <input type="hidden" name="sendhidden" value="get"/>
        <br>
        <br>
        <input type="button" id="sendButton"
               name="sendButton"
               value="Send by GET"
        />

    </form>
</body>
</html>