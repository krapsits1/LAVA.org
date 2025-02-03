<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Under Construction</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url("{{ asset('images/under-construction-bg.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            font-family: Arial, sans-serif;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            max-width: 600px;
        }
        .btn-home {
            background-color: #ffcc00;
            border: none;
            padding: 10px 20px;
            color: black;
            font-weight: bold;
            border-radius: 5px;
        }
        .btn-home:hover {
            background-color: #ffdb4d;
        }
    </style>
</head>
<body>

    <div class="overlay">
        <h1>Page Under Construction</h1>
        <p>We are working hard to bring you this page. Please check back later!</p>
        <a href="{{ url('/') }}" class="btn btn-home mt-3">Go to Homepage</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
