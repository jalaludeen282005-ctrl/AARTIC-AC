<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AARTIC AIR CONDITIONER — AC & Water Solutions</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

  <style>
    :root{
      --bg:#050816;
      --bg-soft:#0b1020;
      --card:#0f172a;
      --muted:#94a3b8;
      --accent1:#00d4ff;
      --accent2:#38bdf8;
      --accent3:#a855f7;
      --accent4:#22c55e;
      --radius:16px;
      --shadow-soft:0 18px 45px rgba(15,23,42,0.65);
    }
    *{box-sizing:border-box;margin:0;padding:0}
    body{
      font-family:Inter,system-ui,Segoe UI,sans-serif;
      background:radial-gradient(circle at top,#0f172a,#020617,#000);
      color:#e5e7eb;
      line-height:1.5;
    }
    .wrap{max-width:1120px;margin:auto;padding:20px}

    /* Header */
    header{
      background:rgba(15,23,42,0.95);
      border-radius:999px;
      padding:12px 20px;
      display:flex;justify-content:space-between;align-items:center;
      position:sticky;top:0;z-index:30;
      box-shadow:0 12px 30px rgba(0,0,0,0.7);
    }
    .logo{
      width:40px;height:40px;border-radius:50%;
      background:conic-gradient(from 200deg,var(--accent1),var(--accent3),var(--accent2));
      font-weight:800;font-size:18px;color:#020617;
      display:flex;align-items:center;justify-content:center;
    }
    nav a{color:var(--muted);margin-left:12px;font-size:13px;text-decoration:none}
    nav a:hover{color:#fff}
    .nav-cta{
      margin-left:12px;background:linear-gradient(120deg,var(--accent1),var(--accent3));
      padding:8px 14px;border-radius:999px;font-weight:700;color:#020617;
    }

    /* Hero */
    .hero{
      background:radial-gradient(circle at top left,#0f172a,#020617);
      padding:24px;border-radius:24px;
      border:1px solid rgba(148,163,184,0.2);
      box-shadow:var(--shadow-soft);
      margin-top:20px;
    }
    .hero h1{font-size:30px;margin-bottom:8px}
    .hero h1 span{
      background:linear-gradient(120deg,var(--accent1),var(--accent3));
      -webkit-background-clip:text;color:transparent
    }
    .pill{
      padding:6px 10px;border-radius:999px;font-size:11px;
      background:rgba(15,23,42,0.9);border:1px solid rgba(148,163,184,0.35);color:var(--muted);
      margin-right:8px;margin-bottom:8px;display:inline-block;
    }
    .btn-primary{
      background:linear-gradient(120deg,var(--accent1),var(--accent2));
      padding:10px 16px;border-radius:999px;color:#020617;font-weight:700;
      display:inline-block;margin-right:10px;margin-top:10px;
    }
    .btn-ghost{
      padding:10px 16px;border-radius:999px;border:1px solid rgba(148,163,184,0.35);
      color:var(--muted);display:inline-block;
    }

    /* Sections */
    section{margin-top:30px}
    h2{font-size:22px;margin-bottom:6px}
    .section-sub{color:var(--muted);font-size:14px;margin-bottom:14px}

    /* Cards */
    .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:16px}
    .card{
      background:var(--bg-soft);padding:16px;border-radius:18px;
      border:1px solid rgba(148,163,184,0.25);box-shadow:0 10px 30px rgba(0,0,0,0.35)
    }
    .card h3{font-size:15px;margin-bottom:4px}

    /* Brands */
    .brand-pill{
      padding:8px 12px;border-radius:999px;
      background:rgba(15,23,42,0.85);border:1px solid rgba(56,189,248,0.4);
      margin:6px;font-size:12px;color:#e5e7eb;display:inline-block;
    }

    /* Contact */
    .contact{
      display:grid;grid-template-columns:1fr 1fr;gap:20px;
    }
    .contact-info,.contact-form{
      background:var(--bg-soft);padding:20px;border-radius:20px;
      border:1px solid rgba(148,163,184,0.25);box-shadow:0 16px 40px rgba(0,0,0,0.5)
    }
    input,select,textarea{
      width:100%;padding:10px;margin-bottom:10px;border-radius:10px;
      background:#0f172a;border:1px solid rgba(148,163,184,0.45);color:#fff;
    }
    .send-btn{
      width:100%;padding:12px;border-radius:999px;border:none;
      background:linear-gradient(120deg,var(--accent3),var(--accent1));
      color:#020617;font-weight:700;font-size:14px;cursor:pointer;
    }

    /* Remove fade completely */
    .fade{opacity:1 !important;transform:none !important;transition:none !important;}
  </style>
</head>

<body>
<div class="wrap">

  <!-- HEADER -->
  <header>
    <div class="brand">
      <div class="logo">AC</div>
      <div>
        <div class="brand-title">AARTIC AIR CONDITIONER</div>
        <div class="brand-sub">Trusted AC care in Chennai</div>
      </div>
    </div>
    <nav>
      <a href="#services">Services</a>
      <a href="#technology">Technology</a>
      <a href="#why-us">Why us</a>
      <a href="#brands">Brands</a>
      <a href="#contact">Contact</a>
      <a class="nav-cta" href="#contact">Request service</a>
    </nav>
  </header>

  <!-- HERO -->
  <section class="hero">
    <h1>Fast & reliable <span>AC repair, installation & maintenance</span></h1>
    <p>We take care of split, window, cassette, ductable and VRF systems with expert mechanics and modern tools.</p>

    <div>
      <span class="pill">Genuine parts</span>
      <span class="pill">Transparent pricing</span>
      <span class="pill">Service report</span>
    </div>

    <a href="#contact" class="btn-primary">Request a visit</a>
    <a href="tel:+919840438560" class="btn-ghost">Call: +91 98404 38560</a>
  </section>

  <!-- SERVICES -->
  <section id="services">
    <h2>Our Services</h2>
    <p class="section-sub">Complete AC care for homes & small businesses.</p>

    <div class="grid">
      <div class="card">
        <h3>AC Repair</h3>
        <p>Sensor faults, PCB issues, no cooling, water leakage and more.</p>
      </div>
      <div class="card">
        <h3>Installation</h3>
        <p>New AC installation, relocation and proper vacuuming.</p>
      </div>
      <div class="card">
        <h3>Deep Cleaning</h3>
        <p>Coil wash, blower cleaning, drain clearing & outdoor wash.</p>
      </div>
      <div class="card">
        <h3>AMC Maintenance</h3>
        <p>Regular planned service with priority support.</p>
      </div>
    </div>
  </section>

  <!-- TECHNOLOGY -->
  <section id="technology">
    <h2>Technology</h2>
    <p class="section-sub">Modern tools + expert experience.</p>

    <div class="grid">
      <div class="card"><h3>Inverter & VRF</h3><p>Advanced diagnostics.</p></div>
      <div class="card"><h3>Smart AC</h3><p>Wi-Fi modules & automation.</p></div>
      <div class="card"><h3>Refrigerants</h3><p>R32, R410A, R22 handling.</p></div>
      <div class="card"><h3>Power Safety</h3><p>Stabilizer & wiring check.</p></div>
    </div>
  </section>

  <!-- WHY US -->
  <section id="why-us">
    <h2>Why choose us?</h2>
    <p class="section-sub">A service built on clarity & customer comfort.</p>

    <div class="grid">
      <div class="card"><h3>Experienced team</h3><p>Trained on all major brands.</p></div>
      <div class="card"><h3>Transparent quotes</h3><p>Clear pricing before work.</p></div>
      <div class="card"><h3>WhatsApp Summary</h3><p>Report shared after service.</p></div>
      <div class="card"><h3>Support</h3><p>7-day post-service callback.</p></div>
    </div>
  </section>

  <!-- BRANDS -->
  <section id="brands">
    <h2>Brands we handle</h2>

    <div>
      <span class="brand-pill">Daikin</span>
      <span class="brand-pill">LG</span>
      <span class="brand-pill">Samsung</span>
      <span class="brand-pill">Voltas</span>
      <span class="brand-pill">Hitachi</span>
      <span class="brand-pill">Carrier</span>
      <span class="brand-pill">Panasonic</span>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact">
    <h2>Contact</h2>
    <p class="section-sub">Call us or submit your request.</p>

    <div class="contact">

      <div class="contact-info">
        <h3>Contact details</h3>
        <p><strong>Phone:</strong><br> +91 98404 38560</p>
        <p><strong>Email:</strong><br> aarticairconditioner@gmail.com</p>
        <p><strong>Working days:</strong><br> Mon–Sat</p>
        <p><strong>Working hours:</strong><br> 10 AM – 7 PM</p>
      </div>

      <form class="contact-form" action="send_mail.php" method="POST">
        <label>Full name</label>
        <input name="name" required />

        <label>Phone number</label>
        <input name="phone" required />

        <label>Service type</label>
        <select name="service">
          <option>AC Sales</option>
          <option>AC Repair</option>
          <option>Maintenance</option>
          <option>Deep Cleaning</option>
          <option>Installation / Relocation</option>
        </select>

        <label>Message</label>
        <textarea name="message"></textarea>

        <button class="send-btn">Send request</button>
      </form>
    </div>
  </section>

  <footer>
    © <script>document.write(new Date().getFullYear());</script> AARTIC AIR CONDITIONER · Chennai
  </footer>

</div>
</body>
</html>