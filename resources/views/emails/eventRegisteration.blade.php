<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GCNS 2025 Registration</title>
    <style>
        /* Reset */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f8f9fa;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .header img {
            width: 100%;
            height: auto;
            display: block;
        }
        .content {
            padding: 30px;
        }
        h2 {
            color: #007bff;
            margin-top: 0;
        }
        p {
            line-height: 1.6;
            font-size: 15px;
        }
        .footer {
            background: #f1f1f1;
            padding: 15px;
            text-align: center;
            font-size: 13px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header with image -->
        <div class="header">
            <img src="{{ asset('images/email_header_gcns25.png') }}" alt="GCNS 2025">
        </div>

        <!-- Content -->
        <div class="content">
            <h2>Dear {{ $name }},</h2>

            <p>
                Thank you for registering for the <strong>Organisation for Research on China and Asia's (ORCA)</strong> 
                Global Conference on New Sinology (GCNS) 2025 - <strong>Day 1</strong>!
            </p>

            <p>
                We appreciate your enthusiasm in participating at the conference. ORCA is committed to ensuring diverse 
                representation from various institutions and stakeholders. This is to ensure a balanced and inclusive 
                experience for all participants and guests.
            </p>

            <p>
                Due to limited seating capacity, we are working diligently to accommodate as many participants as 
                possible while maintaining the highest standards of engagement and interaction.
            </p>

            <p>
                <strong>Please note:</strong> This email only confirms the receipt of your form, and is not in itself a 
                confirmation of your participation as a delegate for Day 1. Confirmation of your participation will be notified separately.
            </p>

            <p>
                In the meantime, we encourage you to visit our website to explore more about the GCNS, including the 
                conference theme, agenda, speakers, and other relevant information.
            </p>

            <p>Thank you for your patience.</p>

            <p>Best regards,<br><strong>Team ORCA</strong></p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Disclaimer: This is an auto-generated email; please do not reply to this mail.</p>
        </div>
    </div>
</body>
</html>
