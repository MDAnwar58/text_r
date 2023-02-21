<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>text js - index 3</title>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.test_2').click(function(event){
                // event.preventDefault();
                // window.location.href = "index3.php";
                
                window.history.pushState("", "", "index3.php");
            });
            $('.test_1').click(function(event){
                // event.preventDefault();
                // window.location.href = "index2.php";
                
                window.history.pushState("", "", "index2.php");
            });
        });
    </script>
</head>
<body>
    <button type="button" class="test_1" style="padding: .5rem 1rem; 
    background-color: green; 
    color: white;
    text-decoration: none;">Text 1</button>
    <button type="button" class="test_2" style="padding: .5rem 1rem; 
    background-color: crimson; 
    color: white;
    text-decoration: none;">Text 2</button>

    <div id="content" style="margin: 3rem;">
        text 2 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque delectus voluptate esse assumenda reprehenderit. Ad excepturi distinctio minus, provident, fugit officia minima aliquam libero aliquid cum tempore, eligendi consequatur exercitationem.
    </div>
</body>
</html>