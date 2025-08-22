<!DOCTYPE html>
<html>
<head>
    <title><?php echo get_bloginfo('name'); ?> - CI/CD Pipeline</title>
    <style>
        body { font-family: Arial; background: #f0f0f0; margin: 0; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 20px; border-radius: 10px; }
        .header { color: #333; border-bottom: 2px solid #007cba; padding-bottom: 10px; }
        .version { background: #007cba; color: white; padding: 5px 10px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚀 WordPress Kubernetes CI/CD Pipeline</h1>
            <p class="version">Version: <?php echo date('Y-m-d H:i:s'); ?></p>
        </div>
        <div class="content">
            <h2>Başarıyla Deploy Edildi!</h2>
            <p>Bu sayfa GitHub Actions ile otomatik olarak Kubernetes'e deploy edildi.</p>
            <ul>
                <li>✅ GitHub Push</li>
                <li>✅ Docker Build</li>
                <li>✅ Kubernetes Deploy</li>
            </ul>
            <p><strong>Pod Info:</strong></p>
            <pre><?php echo gethostname(); ?></pre>
        </div>
    </div>
</body>
</html>
