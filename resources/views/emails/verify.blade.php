<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Verifikasi Email</title>
  <style>
    :root {
      color-scheme: light dark;
    }

    body {
      margin: 0;
      padding: 24px 0;
      background-color: #f0f4f8;
      font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
      color: #34495e;
    }

    .container {
      max-width: 600px;
      margin: 40px auto;
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 6px 30px rgba(0, 0, 0, 0.06);
      overflow: hidden;
    }

    .header {
      background-color: #1e88e5;
      padding: 40px;
      text-align: center;
      color: #ffffff;
    }

    .header img {
      max-width: 70px;
      margin-bottom: 20px;
    }

    .header h2 {
      margin: 0;
      font-size: 1.75rem;
    }

    .content {
      padding: 32px 40px;
    }

    .content p {
      font-size: 1rem;
      line-height: 1.7;
      margin: 16px 0;
    }

    .button {
      display: inline-block;
      background-color: #1e88e5;
      color: #ffffff !important;
      padding: 14px 28px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: 600;
      margin: 24px 0;
      transition: background 0.3s ease;
    }

    .button:hover {
      background-color: #1565c0;
    }

    .note, .link-note {
      font-size: 0.9rem;
      color: #7f8c8d;
      margin-top: 24px;
    }

    .link-box {
      background-color: #f1f3f5;
      color: #2c3e50;
      padding: 12px;
      font-size: 0.85rem;
      border-radius: 6px;
      word-break: break-word;
    }

    .footer {
      background-color: #fafbfc;
      padding: 24px 40px;
      font-size: 0.8rem;
      text-align: center;
      color: #95a5a6;
    }

    .footer strong {
      color: #2c3e50;
    }

    @media (prefers-color-scheme: dark) {
      body {
        background-color: #1e1e2f;
        color: #ecf0f1;
      }

      .container {
        background-color: #2d3a4b;
        color: #ecf0f1;
      }

      .header {
        background-color: #00b894;
      }

      .content p,
      .note,
      .link-note {
        color: #dfe6e9;
      }

      .link-box {
        background-color: #37474f;
        color: #dfe6e9;
      }

      .footer {
        background-color: #263238;
        color: #b0bec5;
      }

      .footer strong {
        color: #ffffff;
      }

      .button {
        background-color: #00cec9;
      }

      .button:hover {
        background-color: #00bfa5;
      }

      a {
        color: #81ecec;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <img src="{{ asset('logo-email.svg') }}" alt="Logo {{ $appName }}" onerror="this.onerror=null;this.src='https://laravel.com/img/logomark.min.svg';" />
      <h2>Verifikasi Email Anda</h2>
    </div>

    <div class="content">
      <p>Halo, <strong>{{ $name }}</strong>!<br>
        Selamat datang di <strong>{{ $appName }}</strong>. Kami senang Anda bergabung.</p>

      <p>Untuk melindungi keamanan akun Anda, silakan klik tombol di bawah ini untuk memverifikasi alamat email Anda.</p>

      <div style="text-align: center;">
        <a href="{{ $verificationUrl }}" class="button">Verifikasi Email</a>
      </div>

      <p class="note">Jika Anda tidak merasa mendaftarkan akun di <strong>{{ $appName }}</strong>, abaikan email ini. Tidak ada tindakan lebih lanjut yang diperlukan.</p>

      <hr style="margin: 32px 0; border: none; border-top: 1px solid #dcdde1;" />

      <p class="link-note">Jika tombol <strong>Verifikasi Email</strong> di atas tidak berfungsi, salin dan tempel tautan ini di browser Anda:</p>

      <div class="link-box">
        <a href="{{ $verificationUrl }}">{{ $verificationUrl }}</a>
      </div>

      <p style="font-size: 0.75rem; color: #a0aec0; margin-top: 24px;">Jangan bagikan tautan ini kepada siapa pun demi keamanan akun Anda.</p>
    </div>

    <div class="footer">
      Salam hangat,<br />
      <strong>{{ $appName }}</strong>
      <div style="margin-top: 12px;">&copy; {{ date('Y') }} {{ $appName }}. All rights reserved.</div>
    </div>
  </div>
</body>
</html>
