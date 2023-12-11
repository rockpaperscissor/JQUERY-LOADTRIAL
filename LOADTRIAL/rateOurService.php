<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rate our service</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate Our Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:purple;
            text-align: center;
        }
        .rateheader{
            height:100px;
            width:100%;
            background-color:white;
            border-bottom-left-radius: 50px 100px;
    border-bottom-right-radius: 50px 100px;
        }
        .rateheader h3{
            position:absolute;
            padding:50px;
        }

        #rating-container {
            margin: 50px auto;
        }

        .star {
            font-size: 30px;
            color: #ccc;
            cursor: pointer;
        }

        .star:hover,
        .star.active {
            color: #ffbf00;
        }

        #feedback {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="rateAll">
        <div class="rateheader">
            <h3>Your Valuable feedbacks</h3>

        </div>

    <div id="rating-container">
        <p>Rate Our Service:</p>
        <span class="star" onclick="rateService(1)">★</span>
        <span class="star" onclick="rateService(2)">★</span>
        <span class="star" onclick="rateService(3)">★</span>
        <span class="star" onclick="rateService(4)">★</span>
        <span class="star" onclick="rateService(5)">★</span>
    </div>

    <div id="feedback">
        <textarea rows="4" cols="50" placeholder="Leave your feedback here..."></textarea><br>
        <button onclick="submitFeedback()">Submit</button>
    </div>

    <script>
        let selectedRating = 0;

        function rateService(rating) {
            selectedRating = rating;
            highlightStars(rating);
        }

        function highlightStars(count) {
            const stars = document.querySelectorAll('.star');
            stars.forEach((star, index) => {
                star.classList.toggle('active', index < count);
            });
        }

        function submitFeedback() {
            // Here, you can send the rating and feedback to your server or perform any other desired action.
            alert(`Thank you for rating our service with ${selectedRating} stars!\nFeedback: ${document.querySelector('textarea').value}`);
        }
    </script>
</div>
</body>
</html>

    <!-- <div class="rateourserviceAll">
        <div class="rateourservicediv">

        </div>
    </div> -->
</body>
</html>