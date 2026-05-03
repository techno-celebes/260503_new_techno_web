<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Tecno - Login</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #f5f5f5; }
        .login-container { max-width: 400px; margin: 50px auto; padding: 2rem; background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .login-container h1 { text-align: center; color: #2c3e50; margin-bottom: 0.5rem; }
        .login-container h2 { text-align: center; color: #7f8c8d; margin-bottom: 1.5rem; font-size: 1.2rem; }
        .form-group { margin-bottom: 1rem; }
        .form-group label { display: block; margin-bottom: 0.5rem; color: #2c3e50; }
        .form-group input { width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem; }
        .btn-group { display: flex; gap: 1rem; }
        .btn-group button { flex: 1; padding: 0.75rem; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem; }
        .btn-primary { background: #3498db; color: white; }
        .btn-secondary { background: #2ecc71; color: white; }
        .back-link { display: block; text-align: center; margin-top: 1rem; color: #3498db; text-decoration: none; }
    </style>
</head>
<body>
    <div class="login-container">
        @yield('content')
    </div>
</body>
</html>