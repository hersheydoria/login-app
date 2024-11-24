<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/logo6.png" />
    <title>Login</title>

    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #286643;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure the body takes full height */
            overflow: hidden; 
        }

        .custom-green {
            background-color: #286643;
        }

        .bg-light-custom {
            background-color: #e6ffb1;
        }

        .card-title h3 {
            color: #286643;
        }

        .btn-custom {
            font-weight: bold;
            background-color: #286643;
            color: white;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }

        .google-btn {
            display: inline-block;
            padding: 10px;
            background-color: #286643; /* Custom green */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            width: 100%;
            text-align: center;
        }

        .full-height {
            min-height: 100vh;
        }

        .form-btns {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .or-text {
            margin: 10px 0;
            color: #286643;
        }

        .footer-text {
            color: black;
            font-size: 12px;
        }

        .centered-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Ensure full height */
            width: 100%; /* Ensure full width */
        }

        .centered-content {
            max-width: 500px; /* Adjust the card size */
            width: 100%;
        }

        .form-card {
            padding: 30px;
            background-color: #e6ffb1;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .logo-img {
            max-width: 120px;
            display: block;
            margin: 0 auto 20px;
        }

        .footer {
            position: sticky;
            bottom: 0;
            background-color: #e6ffb1;
            color: black;
            width: 100%;
            padding: 10px;
            text-align: center;
        }

        .footer-text {
            font-size: 12px;
        }

        .footer a {
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="full-height centered-container">
    <div class="centered-content">
        <div class="form-card">
            <!-- Logo Image -->
            <img src="/logo6.png" alt="System Logo" class="logo-img">

            <!-- Card title for "Login" -->
            <h3 class="text-center" style="color: #286643;"><b>Login</b></h3>

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <!-- Login Button and Google Button -->
                <div class="form-btns">
                    <button type="submit" class="btn-custom">Login</button>

                    <div class="or-text">or</div>

                    <a href="{{ route('auth.google') }}" class="google-btn">Login with Google</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Footer outside the login card -->
<footer class="footer">
    <p class="footer-text">© 2024 - Student Violations</p>
    <a href="#" data-bs-toggle="modal" data-bs-target="#aboutModal" class="text-decoration-underline" style="cursor: pointer; color:#286643">About the Developers</a>
</footer>

<!-- About Developers Modal -->
<div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-light-custom">
            <div class="modal-header">
                <h5 class="modal-title" id="aboutModalLabel"><b>About the Developers</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>System Analyst:</strong> May Estroga</p>
                <p><strong>Lead Developer:</strong> Hershey C. Doria</p>
                <p><strong>Frontend Developer:</strong> Rovannah E. Delola</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS for Modal functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
