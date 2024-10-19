<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Card with Image on Left and Top</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* Custom CSS for desktop view */
        @media (min-width: 768px) {
            .card-horizontal {
                flex-direction: row; /* Image left, content right */
            }
            .card-horizontal img {
                width: 40%; /* Adjust image width */
                object-fit: cover; /* Keep aspect ratio */
            }
        }

        .card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card card-horizontal d-flex flex-column flex-md-row">
        <img src="{{ asset('themes/zenblog/assets/img/blog/beautiful_bangladesh.jpg') }}" class="card-img-top card-img-md-start" alt="Card Image">
        <div class="card-body">
            <h5 class="card-title">Beautiful Bangladesh</h5>
            <p class="card-text">
                Bangladesh is a land of lush greenery, rivers, and rich cultural heritage.
                Explore the magic of nature and warm hospitality that make this country unique.
            </p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
