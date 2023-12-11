<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my account</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="myAccount.css">
</head>
<body>
<script>
        $(function () {
            $('.nav1 a').on('click', function (e) {
                e.preventDefault(); // Prevent the default behavior of the link
                var page = $(this).attr('href');
                $('.myaccountAll').load(page + '.php'); // Load content based on the clicked link
            });
        });
    </script>
    <div class="myaccountAll">
        <div class="nav1">
            <h3>My Account</h3>
                <div class="links">

                <a href="menu">Menu</a>
                <a href="#">Deals & Offers</a>
                <a href="#">Track order</a>
                <a href="#">order history</a>
                <a href="contactUs">contact us</a>
                <a href="resetPass">Password reset</a>
                <a href="rateOurService">Feedback</a>
                <a href="#">logout</a>

                
            </div>


            </div>
            </div>
    
</body>
</html>