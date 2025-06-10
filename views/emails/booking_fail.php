<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Booking Rejected - Selama Community Based Tourism</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      width: 100% !important;
      height: 100% !important;
      font-family: 'Open Sans', Helvetica, Arial, sans-serif;
      background-color: #e9ecef;
    }

    a {
      text-decoration: none;
    }

    @media screen and (max-width: 600px) {
      .stack-column {
        display: block !important;
        width: 100% !important;
        max-width: 100% !important;
      }

      .info-card-table td {
        display: block !important;
        width: 100% !important;
        box-sizing: border-box;
        margin-bottom: 20px;
      }
    }
  </style>
      <link rel="apple-touch-icon" sizes="76x76" href="https://selama.e-veterinar.com/assets/img/apple-touch-icon.png" style="box-sizing: border-box; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;">
    <link rel="icon" type="image/png" href="https://selama.e-veterinar.com/assets/img/favicon-32x32.png" style="box-sizing: border-box; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;">
   
</head>

<body style="margin: 0; padding: 0;">
  <center style="width: 100%; background-color: #e9ecef; padding: 20px 0;">
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td align="center">
          <table width="800" cellpadding="0" cellspacing="0" border="0" style="background: #ffffff; border-radius: 8px; overflow: hidden;">
            <!-- Header -->
            <tr>
              <td align="center" style="background: linear-gradient(310deg,#2E8B57,  #9ACD32);padding: 40px 20px 30px 20px; color: #ffffff;" >
                <h1 style="margin: 0; font-size: 28px; font-weight: 700;">Booking Rejected!</h1>
              </td>
            </tr>

            <!-- Body -->
            <tr>
              <td align="center" style="padding: 30px 20px;">
                <h2 style="font-size: 24px; font-weight: 600; margin-bottom: 15px; color: #344767;">
                  Thank you for your booking, <strong><?php echo $user_email ?></strong>
                </h2>
                <p style="font-size: 16px; color: #67748e; margin: 0 0 10px;">
                  Your booking on <strong><?php echo $date ?></strong> at <strong><?php echo $time ?></strong> has been Rejected.
                </p>
                <p style="font-size: 16px; color: #67748e; margin-bottom: 30px;">
                 </p>
              </td>
            </tr>

            <!-- Info Cards (as table columns) -->
            <tr>
              <td align="center" style="padding: 0 20px 30px;">
                <table width="100%" cellpadding="0" cellspacing="10px" border="0" class="info-card-table">
                  <tr>
                    <!-- Date -->
                    <td align="left" valign="top" style="background: rgb(218, 218, 218); border-radius: 10px; padding: 20px; text-align: left; width: 33.33%; box-sizing: border-box;border-radius:1rem;">
                      <div style="width: 40px; height: 40px; background: linear-gradient(310deg,#2E8B57,  #9ACD32);border-radius: 50%; text-align: center; line-height: 40px; color: #fff; font-size: 20px; margin-bottom: 10px;">📅</div>
                      <h3 style="margin: 0 0 5px; font-size: 20px; font-weight: 700; color: #2E8B57;"><?php echo $date ?></h3>
                      <span style="font-size: 16px; font-weight: 500; color: #67748e;">Date</span>
                    </td>

                    <!-- Time -->
                    <td align="left" valign="top" style="background:rgb(218, 218, 218); border-radius: 10px; padding: 20px; text-align: left; width: 33.33%; box-sizing: border-box;border-radius:1rem;">
                      <div style="width: 40px; height: 40px; background: linear-gradient(310deg,#2E8B57,  #9ACD32);border-radius: 50%; text-align: center; line-height: 40px; color: #fff; font-size: 20px; margin-bottom: 10px;">⏰</div>
                      <h3 style="margin: 0 0 5px; font-size: 20px; font-weight: 700; color: #2E8B57;"><?php echo $time ?></h3>
                      <span style="font-size: 16px; font-weight: 500; color: #67748e;">Time</span>
                    </td>

                    <!-- People -->
                    <td align="left" valign="top" style="background:rgb(218, 218, 218); border-radius: 10px; padding: 20px; text-align: left; width: 33.33%; box-sizing: border-box;border-radius:1rem;">
                      <div style="width: 40px; height: 40px; background: linear-gradient(310deg,#2E8B57,  #9ACD32);border-radius: 50%; text-align: center; line-height: 40px; color: #fff; font-size: 20px; margin-bottom: 10px;">👥</div>
                      <h3 style="margin: 0 0 5px; font-size: 20px; font-weight: 700; color: #2E8B57;"><?php echo $people ?></h3>
                      <span style="font-size: 16px; font-weight: 500; color: #67748e;">People</span>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>

            <!-- Button -->
            <tr>
              <td align="center" style="padding-bottom: 30px;">
                <a href="<?php echo $rootPath ?>/booking/<?php echo $id ?>" target="_blank"
                  style="display: inline-block; background: linear-gradient(310deg,#2E8B57,  #9ACD32);color: #ffffff; text-decoration: none; font-weight: 700; padding: 15px 30px;  border-radius:1rem; font-size: 16px; max-width: 280px; margin: 0 auto; box-shadow: 0 4px 12px rgba(50, 50, 50, 0.15);">
                  Booking Details
                </a>
              </td>
            </tr>

            <!-- Footer -->
            <tr>
              <td align="center" style="font-size: 14px; text-align: center; color: #8392ab; padding: 20px;">
                2025, made with ❤️ by
                <a href="#" target="_blank" style="color: #9ACD32; text-decoration: none; font-weight: 600;">Syakir</a>
                for a better web.
              </td>
            </tr>

          </table>
        </td>
      </tr>
    </table>
  </center>
</body>

</html>
