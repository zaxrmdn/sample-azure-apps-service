<?php
// Konfigurasi & Variabel Aplikasi Statis
$app_name = "Azure App Service - PHP Static Lab";
$version  = "1.0.0";
$server_time = TZ='Asia/jakarta' date;
$php_ver = phpversion();

$features = [
    ["title" => "Direct PHP Execution", "desc" => "Berjalan langsung di atas Linux Container Azure App Service."],
    ["title" => "Zero Database Needed", "desc" => "Cocok untuk landing page, dokumentasi, atau portal statis cepat."],
    ["title" => "Git Continuous Deployment", "desc" => "Otomatis ter-deploy saat Anda melakukan push ke branch utama."]
    ["title" => "Git Continuous Deployment", "desc" => "Otomatis ter-deploy saat Anda melakukan push ke branch utama."]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $app_name ?></title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; background-color: #f4f6f9; color: #333; margin: 0; padding: 40px 20px; }
        .card { max-width: 650px; margin: 0 auto; background: #fff; border-radius: 10px; padding: 30px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); }
        .header { text-align: center; border-bottom: 2px solid #eaeaea; padding-bottom: 20px; margin-bottom: 25px; }
        .badge { background-color: #0078d4; color: white; padding: 4px 10px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-block; margin-top: 10px; }
        .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; background: #f8f9fa; padding: 15px; border-radius: 6px; font-size: 0.9rem; margin-bottom: 25px; }
        .feature-list { list-style: none; padding: 0; }
        .feature-item { padding: 12px 0; border-bottom: 1px solid #eee; }
        .feature-item:last-child { border-bottom: none; }
        .feature-title { font-weight: bold; color: #0078d4; }
        .footer { text-align: center; margin-top: 25px; font-size: 0.8rem; color: #777; }
    </style>
</head>
<body>

<div class="card">
    <div class="header">
        <h1>🚀 <?= $app_name ?></h1>
        <span class="badge">Environmemnt: Azure App Service</span>
    </div>

    <div class="info-grid">
        <div><strong>PHP Version:</strong> <?= $php_ver ?></div>
        <div><strong>App Version:</strong> <?= $version ?></div>
        <div style="grid-column: span 2;"><strong>Server Time:</strong> <?= $server_time ?></div>
    </div>

    <h3>Keunggulan Arsitektur Ini:</h3>
    <ul class="feature-list">
        <?php foreach ($features as $f): ?>
            <li class="feature-item">
                <div class="feature-title"><?= $f['title'] ?></div>
                <div><?= $f['desc'] ?></div>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="footer">
        Dideploy via Azure Deployment Center &bull; Static PHP Engine
    </div>
</div>

</body>
</html>
