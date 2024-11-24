<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/logo6.png" />
    <title>Home</title>

    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #286643;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .centered-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
        }

        .centered-content {
            max-width: 600px;
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

        .card-header {
            background-color: #286643;
            color: white;
            text-align: center;
            border-radius: 8px 8px 0 0;
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
            color: #286643;
            cursor: pointer;
        }

        .table th, .table td {
            background-color: #e6ffb1;
        }

        .btn-danger {
            background-color: #d9534f;
            border: none;
        }
    </style>
</head>
<body>
    <!-- Main Content -->
    <div class="centered-container">
        <div class="centered-content">
            <div class="form-card">
            <img src="/logo6.png" alt="System Logo" class="logo-img">
                <div class="card-header">
                    <h2>Welcome, {{ Auth::user()->name }}</h2>
                </div>
                <div class="card-body">
                    <h4>User Details</h4>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <th>Google ID</th>
                            <td>{{ Auth::user()->google_id ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Account Created At</th>
                            <td>{{ Auth::user()->created_at->timezone('Asia/Manila')->format('d M Y, h:i A') }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p class="footer-text">© 2024 - Student Violations</p>
        <a href="#" data-bs-toggle="modal" data-bs-target="#aboutModal">About the Developers</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
