<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 01</title>
    
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script> 

        $(document).ready(() => {

            let backgroundColor = 'white';

            $('.square div').mouseover(function(){
                let color = $(this).css('background-color');
                $(document.body).css('background-color', color);
                $('.color').html(color);
            });

            $('.square div').mouseleave((e) => {
                $(document.body).css('background-color', backgroundColor);
                $('.color').html(backgroundColor);
            });

            $('.square div').click((e) =>{
                backgroundColor = e.target.style.backgroundColor;

                $('#color-change').fadeToggle(2000);
                
                setTimeout(() => {
                    $('#color-change').fadeToggle(2000);
                }, 3000);
            });

            $('.color').click(() =>{
                let text = $('.color').html();
				
				navigator.clipboard.writeText(text);
                
                $('#color-copy').fadeToggle(2000);
                
                setTimeout(() => {
                    $('#color-copy').fadeToggle(2000);
                }, 3000);
            });
			
			
        });

    </script>
</head>

<style>
    .square{
        width: 300px;
        margin: 50px auto;
    }

    .square div{
        width: 30px;
        height: 30px;
        float: left;
        border: 1px solid black; 
    }

    .color{
        background-color: darkgray;
        color: white;
        width: 300px;
        padding: 20px;
        text-align: center;
        font-size: 30px;
        border-radius: 15px;
        margin: 20px auto;
    }

    .color:hover{
        background-color: #f4343f;
        cursor: pointer;
    }
	
	#color-change{
		width:450px; 
		margin: 400px auto; 
		text-align:center; 
		display:none;
	}
	
	#color-copy{
		width:450px; 
		margin: 400px auto; 
		text-align:center; 
		display:none;
	}

</style> 
<body>
    <p class = "color"> Color </p>
    
    <div class = "square">
        <?php
            for($i = 1; $i <= 100; $i++){

                $r = round(rand(1,255));
                $g = round(rand(1,255));
                $b = round(rand(1,255));

                echo "<div style = \"background-color: rgb($r,$g,$b);\"></div>";
            }
        ?>
    </div>

    <!--For alerts-->
    <div id = "color-change" class="alert alert-success" role="alert">
        Color has been changed!
    </div>

    <div id = "color-copy" class="alert alert-success" role="alert">
        Color code has been copied to clipboard!
    </div>
</body>

</html>