<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="settings.css">
<!-- reset password,feedback,deleteaccount,complaints,rate our service,my orders,bills,order history -->
</head>
<body>
    <script>
        $(function () {
            $('.nav1 .links a').on('click', function (e) {
                e.preventDefault(); // Prevent the default behavior of the link
                var page = $(this).attr('href');
                $('.contactAll').load(page + '.php'); 
                // Load content based on the clicked link


                
            });
            
        });
    </script>
    <div class="contactAll">

        <div class="contactdiv">
            <div class="contactheaddiv">
                <h3>Settings</h3>        
                <div class="nav1">
            
                    <div class="links">
                    <!-- <a href="#">reset password</a> -->
                    
                    <a href="#">order history </a>
                    <a href="rateOurService">Feedback</a>
                    <!-- <a href="#">bills</a> -->
                    <a href="resetPass">Password reset</a>
                    <!-- <a href="">Feedback</a> -->
                    <a href="#">logout</a>
                    <!-- <a href="#">Delivery</a>
                    <a href="#">Terms and Conditions</a>
                    <a href="#">Help & Support</a> -->
                </div>
    


            </div>
            
            
        </div>
        <div class="contactpagediv">

               
            </div>

    </div>
</body>
</html>