<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Page NOT Found!</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
    <link rel="canonical" href="https://msmsdelhi.in/mjms/404.php" />
    <style>
        .error-page {
            min-height: 100vh;
            background: rgb(255, 255, 255);
    background: -moz-radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgba(1, 68, 107, 1) 100%);
    background: -webkit-radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgba(1, 68, 107, 1) 100%);
    background: radial-gradient(circle, rgb(115 102 102) 0%, rgba(1, 68, 107, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffff",endColorstr="#01446b",GradientType=1);
        }

        .error-container {
            max-width: 600px;
        }

        .error-code {
            font-size: 12rem;
            font-weight: 900;
            background: linear-gradient(to right, #fff, rgba(255, 255, 255, 0.5));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: pulse 2s infinite;
        }

        .error-message {
            color: rgba(255, 255, 255, 0.9);
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .btn-glass {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            transition: all 0.3s ease;
        }

        .btn-glass:hover {
            background: rgba(255, 255, 255, 0.3);
            color: white;
        }
    </style>
  </head>
  <body>
    
    <div class="section position-relative"  >
        <div class="error-page d-flex align-items-center justify-content-center">
            <div class="error-container text-center p-4">
                <h1 class="error-code mb-0">404</h1>
                <h2 class="display-6 error-message mb-3">Page Not Found</h2>
                <p class="lead error-message mb-5">We can't seem to find the page you're looking for.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="https://msmsdelhi.in/mjms/" class="btn btn-glass px-4 py-2">Return Home</a>
                    <!-- <a href="#" class="btn btn-glass px-4 py-2">Report Problem</a> -->
                </div>
            </div>
        </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
