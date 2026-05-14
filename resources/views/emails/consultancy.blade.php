<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consultancy Request Received</title>
</head>
<body style="margin:0;padding:0;background:#f4f4f4;font-family:Arial,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f4;padding:30px 0;">
    <tr>
        <td align="center">

            <table width="650" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:8px;overflow:hidden;">

                <!-- Header -->
                <tr>
                    <td align="center" style="background:#0d1b2a;padding:30px;">
                        <img src="{{ asset('images/ORCA Website Banner Logo PNG.png') }}" alt="ORCA Logo" style="max-width:180px;">
                    </td>
                </tr>

                <!-- Title -->
                <tr>
                    <td style="padding:40px 40px 20px;">
                        <h2 style="margin:0;color:#0d1b2a;">
                            Thank You for Contacting ORCA
                        </h2>
                    </td>
                </tr>

                <!-- Content -->
                <tr>
                    <td style="padding:0 40px 40px;color:#333;font-size:15px;line-height:1.8;">

                        <p>
                            Dear {{ $data['name'] }},
                        </p>

                        <p>
                            Thank you for reaching out to the Organisation for Research on China and Asia (ORCA).
                        </p>

                        <p>
                            We have successfully received your consultancy request. Our team will review your inquiry and get back to you within 2–3 working days.
                        </p>

                        <div style="
                            margin-top:25px;
                            background:#f8f9fa;
                            padding:20px;
                            border-radius:6px;
                            border-left:4px solid #0d1b2a;
                        ">

                            <strong>Your Project Details:</strong>

                            <p style="margin-top:10px;">
                                {{ $data['project_details'] }}
                            </p>

                        </div>

                        <p style="margin-top:30px;">
                            If your request is urgent, you may reply directly to this email.
                        </p>

                        <p>
                            Regards,<br>
                            <strong>Team ORCA</strong><br>
                            Organisation for Research on China and Asia
                        </p>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td align="center" style="
                        background:#f8f9fa;
                        padding:20px;
                        color:#777;
                        font-size:13px;
                    ">
                        © {{ date('Y') }} ORCA. All rights reserved.
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>