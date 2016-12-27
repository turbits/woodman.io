<head>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi|Lato" rel="stylesheet">
</head>
<!-- body -->
<body style="background-color:#f2f2f2;margin:0;height:100%;">
  <!-- wrapper -->
  <div style="min-height:100%;margin-bottom:-60px;">
    <!-- woodman.io title div -->
    <div style="background-color:#ffffff;width:100%;height:80px;position:absolute;top:0;left:0;text-align:center;border-bottom:1px solid #e3e3e3">
      <h1 style="color:#111111;font-family:'Baloo Thambi', Helvetica, sans-serif;margin-top:15px;font-size:48px;">
        Woodman.io
      </h1>
    </div> <!-- end title div -->
    <!-- main content div -->
    <div style="width: 100%;width:500px;height:800px;background-color:#ffffff;margin:120px auto 0 auto;text-align:center;border:1px solid #e3e3e3;">
      <!-- lock image -->
      <img src="http://i.imgur.com/mDsc4XQ.png" style="height: auto;width:200px;margin-top:100px;">
      <!-- text -->
      <h2 style="font-family:'Lato', Helvetica, sans-serif;font-size: 24px;">Forgot your password?</h2>
      <p style="font-family:'Lato', Helvetica, sans-serif;font-size: 18px;">That's cool. Just click:<br>
        <!-- CTA button -->
        <a href="{{ $link = url('password/reset', $token).'?email'.urlencode($user->getEmailForPasswordReset()) }}" style="font-size:28px;color:#ecf0f1;font-weight:bold;width:300px;height:60px;background-color:#27ae60;display:block;margin:30px auto 0 auto;padding-top:20px;text-decoration:none;border-radius:4px;border:1px solid #95a5a6;" target="_blank">Reset Password</a>
      </p>
      <br>
      <hr style="background-color:#e3e3e3;height:1px;width:100%;border:none;">
      <br>
      <!-- for plain text users -->
      <p style="font-family:'Lato', Helvetica, sans-serif;font-size: 14px;">If that doesn't work, copy paste the following into your address bar:</p>
      <p style="font-family: monospace;font-size:14px;">{{ $link }}</p>
      <!-- footer push -->
      <div style="height:60px;"></div>
      <!-- footer -->
      <div style="margin:0 auto;height:60px;width:500px;background-color:#e3e3e3;text-align:center;">
        <p style="font-family: monospace;font-size:10px;padding-top:10px;">&copy; 2016 Woodman.io | Trevor Woodman</p>
        <p style="font-family: monospace;font-size:16px;">
          <a href="http://woodman.io">WOODMAN.IO</a>
        </p>
      </div>
    </div> <!-- end main content div -->
  </div> <!-- end wrapper -->
</body> <!-- end body -->
