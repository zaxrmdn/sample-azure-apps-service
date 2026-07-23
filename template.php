<?php
// PHP dijalankan saat build time di GitHub Actions
$time_built = date('Y-m-d H:i:s T');
$php_version = phpversion();

// Contoh data interaktif/dinamis yang di-generate via PHP
$features = [
    "PHP Server-Side Rendering via GitHub Actions",
    "Automated Deployment to GitHub Pages",
    "Interactive LocalStorage for Browser Session"
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + GitHub Actions Demo</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f0f4f8; margin: 0; padding: 20px; color: #333; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h1 { color: #24292e; font-size: 24px; text-align: center; }
        .badge { background: #777bb4; color: white; padding: 4px 8px; border-radius: 4px; font-size: 12px; }
        .info-box { background: #e2f0d9; border-left: 4px solid #388e3c; padding: 12px; margin: 20px 0; font-size: 14px; }
        ul { background: #f9f9f9; padding: 15px 30px; border-radius: 6px; }
        form { display: flex; flex-direction: column; gap: 15px; margin-top: 20px; }
        input, textarea { padding: 12px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px; width: 100%; box-sizing: border-box; }
        button { background: #2da44e; color: white; border: none; padding: 12px; border-radius: 6px; font-size: 16px; cursor: pointer; }
        .msg-card { background: #fafafa; border: 1px solid #eee; padding: 15px; border-radius: 6px; margin-bottom: 10px; }
    </style>
</head>
<body>

<div class="container">
    <h1>⚡ PHP + GitHub Actions</h1>
    <p style="text-align: center;"><span class="badge">PHP Version: <?= $php_version ?></span></p>

    <div class="info-box">
        <strong>Halaman ini Dihasilkan oleh PHP!</strong><br>
        Waktu Build: <code><?= $time_built ?></code>
    </div>

    <h3>Fitur Lab Ini:</h3>
    <ul>
        <?php foreach ($features as $feature): ?>
            <li><?= $feature ?></li>
        <?php endforeach; ?>
    </ul>

    <hr style="border: 0; border-top: 1px solid #eee; margin: 25px 0;">

    <h3>Form Interaktif (Client-Side Storage):</h3>
    <form id="guestbookForm">
        <input type="text" id="nameInput" placeholder="Nama Anda" required>
        <textarea id="messageInput" rows="3" placeholder="Tulis pesan interaktif..." required></textarea>
        <button type="submit">Kirim Pesan</button>
    </form>

    <div style="margin-top: 25px;">
        <h3>Pesan Terkirim:</h3>
        <div id="messagesList"></div>
    </div>
</div>

<script>
    // Logic interaktif client-side tetap berjalan lancar di browser
    const form = document.getElementById('guestbookForm');
    const messagesList = document.getElementById('messagesList');

    function loadMessages() {
        const messages = JSON.parse(localStorage.getItem('php_gh_messages')) || [];
        messagesList.innerHTML = messages.length === 0 ? '<p style="color: #888;">Belum ada pesan.</p>' : '';
        messages.forEach(msg => {
            const card = document.createElement('div');
            card.className = 'msg-card';
            card.innerHTML = `<strong>${msg.name}</strong> <small style="color:#888;">(${msg.time})</small><br>${msg.message}`;
            messagesList.appendChild(card);
        });
    }

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const newMessage = {
            name: document.getElementById('nameInput').value,
            message: document.getElementById('messageInput').value,
            time: new Date().toLocaleTimeString('id-ID')
        };
        const messages = JSON.parse(localStorage.getItem('php_gh_messages')) || [];
        messages.unshift(newMessage);
        localStorage.setItem('php_gh_messages', JSON.stringify(messages));
        form.reset();
        loadMessages();
    });

    loadMessages();
</script>

</body>
</html>
