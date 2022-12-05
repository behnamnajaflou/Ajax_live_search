<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="text-center mt-5 mb-4">
            <h2>Thanks to AJAX, Live searching in PHP with MySQL</h2>
        </div>
        <input class="form-control" type="text" id="search" placeholder="Type and Enjoy from Ajax..">
    </div>
    <div id="result"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function (){
            $("#search").keyup(function (){
                var input = $(this).val();
                //alert(input);
                if(input != ""){
                    $.ajax({
                        url: "search.php",
                        method: "POST",
                        data: {input : input},

                        success: function (data){
                            $("#result").html(data);
                            $("#result").css("display", "block");
                        }
                    })
                }else {
                    $("#result").css("display", "none");
                }
            })
        })
    </script>
</body>
</html>
