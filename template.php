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
    <title>Azure App Service - Interactive Lab</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f7f6; margin: 0; padding: 20px; color: #333; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h1 { color: #0078d4; font-size: 24px; text-align: center; }
        .status { background: #e1f5fe; border-left: 4px solid #0288d1; padding: 10px 15px; margin-bottom: 20px; font-size: 14px; }
        form { display: flex; flex-direction: column; gap: 15px; }
        input, textarea { padding: 12px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px; width: 100%; box-sizing: border-box; }
        button { background: #0078d4; color: white; border: none; padding: 12px; border-radius: 6px; font-size: 16px; cursor: pointer; transition: 0.3s; }
        button:hover { background: #005a9e; }
        .messages { margin-top: 30px; }
        .msg-card { background: #fafafa; border: 1px solid #eee; padding: 15px; border-radius: 6px; margin-bottom: 10px; }
        .msg-header { font-weight: bold; color: #0078d4; display: flex; justify-content: space-between; margin-bottom: 5px; }
        .msg-time { font-size: 12px; color: #888; font-weight: normal; }
    </style>
</head>
<body>

<div class="container">
    <h1>🚀 Azure App Service Demo (PHP)</h1>
    
    <div class="status">
        <strong>Status:</strong> Terhubung ke Azure App Service via Deployment Center (Git)!
    </div>

    <form method="POST" action="">
        <input type="text" name="name" placeholder="Nama Anda" required>
        <textarea name="message" rows="3" placeholder="Tulis pesan interaktif Anda di sini..." required></textarea>
        <button type="submit">Kirim Pesan</button>
    </form>

    <div class="messages">
        <h3>Pesan Terkirim:</h3>
        <?php if (empty($messages)): ?>
            <p style="color: #888;">Belum ada pesan. Jadi yang pertama mengirim!</p>
        <?php else: ?>
            <?php foreach ($messages as $msg): ?>
                <div class="msg-card">
                    <div class="msg-header">
                        <span><?= $msg['name'] ?></span>
                        <span class="msg-time"><?= $msg['time'] ?></span>
                    </div>
                    <div><?= $msg['message'] ?></div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

</body>
</html>

