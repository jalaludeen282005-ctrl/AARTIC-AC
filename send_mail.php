<?php
// Simple mail handler for AARTIC AIR CONDITIONER

// Replace with your real email (owner email)
$to = "aarticairconditioner@gmail.com";

// Make sure form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo "Method not allowed.";
  exit;
}

// Get fields safely
$name    = trim($_POST['name'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

// Basic validation
if ($name === '' || $phone === '' || $service === '') {
  echo "<!DOCTYPE html><html><body style='background:#020617;color:#e5e7eb;font-family:system-ui;padding:30px;'>
        <h2>Missing details</h2>
        <p>Please go back and fill your name, phone and service type.</p>
        <p><a href='index.php' style='color:#38bdf8;'>← Back to site</a></p>
        </body></html>";
  exit;
}

// Build email data
$subject = "New Service Request - AARTIC AIR CONDITIONER";
$body  = "You have received a new service request:\n\n";
$body .= "Name:    $name\n";
$body .= "Phone:   $phone\n";
$body .= "Service: $service\n";
$body .= "Message: $message\n\n";
$body .= "Sent from website contact form.";

$headers  = "From: AARTIC AIR CONDITIONER <no-reply@aarticac.local>\r\n";
$headers .= "Reply-To: $phone\r\n";

// Try to send (will work on most live hosting servers)
$sent = @mail($to, $subject, $body, $headers);

// Response page
echo "<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title>Request status - AARTIC AIR CONDITIONER</title>
  <meta name='viewport' content='width=device-width,initial-scale=1'>
  <style>
    body{
      background:#020617;
      color:#e5e7eb;
      font-family:-apple-system,BlinkMacSystemFont,system-ui,'Segoe UI',sans-serif;
      display:flex;
      align-items:center;
      justify-content:center;
      min-height:100vh;
      margin:0;
    }
    .box{
      max-width:420px;
      padding:22px 24px;
      border-radius:18px;
      background:#020617;
      border:1px solid rgba(148,163,184,0.45);
      box-shadow:0 22px 50px rgba(15,23,42,0.95);
      text-align:center;
    }
    h1{font-size:20px;margin-bottom:8px;}
    p{font-size:14px;color:#cbd5f5;margin-bottom:10px;}
    .ok{color:#4ade80;}
    .err{color:#fb7185;}
    a{
      display:inline-block;
      margin-top:8px;
      padding:8px 14px;
      border-radius:999px;
      border:1px solid rgba(148,163,184,0.7);
      color:#e5e7eb;
      text-decoration:none;
      font-size:13px;
    }
  </style>
</head>
<body>
  <div class='box'>
    <h1 class='".($sent ? "ok" : "err")."'>".
      ($sent ? "Request received" : "Request saved (mail not sent locally)").
    "</h1>
    <p>Thank you, <strong>".htmlspecialchars($name,ENT_QUOTES)."</strong>. Your request has been recorded.</p>
    <p>On a proper live hosting server, this form will send all details to <strong>$to</strong>.</p>
    <a href='index.php'>← Back to website</a>
  </div>
</body>
</html>";