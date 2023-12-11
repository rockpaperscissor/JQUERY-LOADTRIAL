<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

    <?php
    // Your PHP code here
    ?>

    <script>
        $(function () {
            $('ul#nav li a').on('click', function (e) {
                e.preventDefault(); // Prevent the default behavior of the link
                var page = $(this).attr('href');
                $('#content').load(page + '.php'); // Load content based on the clicked link
            });
        });
    </script>

    <ul id="nav">
        <li><a href="home">HOME</a></li>
        <li><a href="about">ABOUT US</a></li>
        <li><a href="contact">CONTACT</a></li>
    </ul>

    <div id="content"></div>

</body>

</html>
