<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Booking Confirmed - Selama Community Based Tourism</title>
    <style>
        /* Reset & base */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            max-width: 100%;
            display: block;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100% !important;
            height: 100% !important;
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            color: #344767;
        }

        /* Container */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }

        /* Header */
        .header {
            background: linear-gradient(310deg, #9ACD32, #2E8B57);
            padding: 40px 20px 30px 20px;
            text-align: center;
            color: #fff;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            letter-spacing: -0.03em;
        }

        /* Body */
        .body-content {
            padding: 30px 20px;
            text-align: center;
        }

        .body-content h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #344767;
        }

        .body-content p {
            font-size: 16px;
            line-height: 1.5;
            margin: 0 0 30px;
            color: #67748e;
        }

        .body-content strong {
            color: #344767;
        }

        /* Info cards container */
        .info-cards {
            display: flex;
            justify-content: space-between;
            padding: 0 10px 30px;
        }

        /* Info card */
        .info-card {
            background: #f1f9e4;
            border-radius: 10px;
            padding: 20px;
            flex: 1 1 30%;
            margin: 0 5px;
            text-align: left;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .info-card .icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(310deg, #9ACD32, #2E8B57);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .info-card h3 {
            margin: 0 0 5px;
            font-size: 20px;
            font-weight: 700;
            color: #2E8B57;
        }

        .info-card span {
            font-size: 16px;
            font-weight: 500;

            color: #67748e;
        }

        /* Button */
        .btn-primary {
            display: inline-block;
            background: linear-gradient(310deg, #9ACD32, #2E8B57);
            color: #fff !important;
            text-decoration: none;
            font-weight: 700;
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 16px;
            width: 100%;
            max-width: 280px;
            margin: 0 auto;
            box-shadow: 0 4px 12px rgba(50, 50, 50, 0.15);
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(310deg, #2E8B57, #9ACD32);
        }

        /* Footer */
        .footer {
            font-size: 14px;
            text-align: center;
            color: #8392ab;
            padding: 20px;
        }

        .footer a {
            color: #9ACD32;
            text-decoration: none;
            font-weight: 600;
        }

        /* Responsive */
        @media screen and (max-width: 480px) {
            .info-cards {
                flex-direction: column;
                padding: 0 10px;
            }

            .info-card {
                margin: 10px 0;
            }
        }
    </style>
    <!--[if mso]>
  <style>
    .info-cards { display: block !important; }
    .info-card { width: 100% !important; margin-bottom: 20px !important; }
  </style>
  <![endif]-->
</head>

<body>
    <center style="width: 100%; background-color: #e9ecef; padding: 20px 0;">
        <div class="email-container" role="article" aria-roledescription="email"
            aria-label="Booking confirmation for Selama Community Based Tourism">

            <!-- Header -->
            <div class="header" role="banner">
                <h1>Booking Confirmed!</h1>
            </div>

            <!-- Body -->
            <div class="body-content">
                <h2>Thank you for your booking, <strong><?php echo $user_email ?></strong></h2>
                <p>Your booking on <strong><?php echo $date ?></strong> at <strong><?php echo $time ?></strong> has been
                    approved.</p>
                <p>Please wait for your guide to be confirmed</p>
                <!-- Info cards -->
                <div class="info-cards" role="list">

                    <div class="info-card" role="listitem" aria-label="Booking date">
                        <div class="icon" aria-hidden="true">📅</div>
                        <h3><?php echo $date ?></h3>
                        <span>Date</span>
                    </div>

                    <div class="info-card" role="listitem" aria-label="Booking time">
                        <div class="icon" aria-hidden="true">⏰</div>
                        <h3><?php echo $time ?></h3>
                        <span>Time</span>
                    </div>

                    <div class="info-card" role="listitem" aria-label="Number of people">
                        <div class="icon" aria-hidden="true">👥</div>
                        <h3><?php echo $people ?></h3>
                        <span>People</span>
                    </div>

                </div>

                <!-- Button -->
                <a href="<?php echo $rootPath ?>/booking/<?php echo $id ?>" class="btn-primary" target="_blank" rel="noopener noreferrer"
                    role="button" aria-label="View Booking Details">Booking Details</a>
            </div>

            <!-- Footer -->
            <div class="footer" role="contentinfo">
                2025, made with <span aria-hidden="true">❤️</span> by
                <a href="#" target="_blank" rel="noopener noreferrer">Syakir</a> for a better web.
            </div>
        </div>
    </center>
</body>

</html>