<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Code</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f9fafb;
            color: #333;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            width: 100%;
            max-width: 650px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #3498db;
        }
        h1 {
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        p {
            font-size: 16px;
            color: #7f8c8d;
            line-height: 1.6;
        }
        .code {
            font-size: 36px;
            color: #e74c3c;
            font-weight: 700;
            padding: 15px 30px;
            border: 2px solid #e74c3c;
            border-radius: 8px;
            margin-top: 20px;
            letter-spacing: 4px;
        }
        .footer {
            font-size: 14px;
            color: #95a5a6;
            margin-top: 30px;
        }
        .btn {
            background-color: #3498db;
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            margin-top: 20px;
            display: inline-block;
        }
        .btn:hover {
            background-color: #2980b9;
        }
        .footer a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Verification Code</h1>
        <p>Hello {{ $user->name ? $user->name : 'Valued Customer' }},</p>
        <p>Thank you for registering with us! Your verification code is:</p>
        <p class="code">{{ str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT) }}</p> <!-- توليد كود تحقق 6 أرقام -->
        <p>Please enter this code on the website to complete your registration process.</p>
        <a href="#" class="btn">Complete Registration</a>
        <div class="footer">
            <p>If you did not request this, please ignore this email.</p>
            <p>Need help? <a href="mailto:support@example.com">Contact Support</a></p>
        </div>
    </div>
</body>
</html>
