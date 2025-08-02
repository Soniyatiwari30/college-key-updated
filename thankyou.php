
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .container {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.8s ease-out forwards;
            max-width: 500px;
            width: 90%;
        }

        .checkmark {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #10712a;
            margin: 0 auto 1.5rem;
            position: relative;
            opacity: 0;
            animation: checkmarkScale 0.3s ease-out 0.5s forwards;
        }

        .checkmark::after {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            width: 30px;
            height: 15px;
            border-left: 4px solid white;
            border-bottom: 4px solid white;
            transform: translate(-50%, -60%) rotate(-45deg);
            animation: drawCheck 0.5s ease-out 0.8s forwards;
            opacity: 0;
        }

        h1 {
            color: #10712a;
            margin-bottom: 1rem;
            opacity: 0;
            animation: fadeIn 0.5s ease-out 1.3s forwards;
        }

        p {
            color: #495057;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            opacity: 0;
            animation: fadeIn 0.5s ease-out 1.6s forwards;
        }

        .order-details {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 8px;
            border-left: 4px solid #10712a;
            opacity: 0;
            animation: slideInLeft 0.5s ease-out 1.9s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes checkmarkScale {
            from {
                transform: scale(0);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes drawCheck {
            from {
                opacity: 0;
                clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
            }

            to {
                opacity: 1;
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background: #10712a;
            animation: confettiFall linear forwards;
        }

        a {
            color: #10712a;
        }

        @keyframes confettiFall {
            0% {
                transform: translateY(-100vh) rotate(0deg);
                opacity: 1;
            }

            100% {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
    <!-- Event snippet for Clicks conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-16582625877/0aiZCJTE5sAZENWUm-M9',
      'value': 1.0,
      'currency': 'INR'
  });
</script>

    
</head>

<body>
    <div class="container">
        <div class="checkmark"></div>
        <h1>Thank You!</h1>
        <p>We have received your inquiry, and our admissions team will get in touch with you shortly.</p>
       <!-- <a href="callto:+917015730645">Call +91 9257094135</a> -->
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const params = new URLSearchParams(window.location.search);
        const currentUrl = params.get('currentUrl');
        if (currentUrl) {
            setTimeout(function () {
                window.location.href = currentUrl;
            }, 60000);
        }
    });
    function redirectTo () {
        const params = new URLSearchParams(window.location.search);
        const currentUrl = params.get('currentUrl');
        if (currentUrl) {
            window.location.href = currentUrl;
        }
    }
</script>

</html>
