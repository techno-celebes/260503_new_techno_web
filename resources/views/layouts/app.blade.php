<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Tecno</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #f5f5f5; }
        header { background: #2c3e50; color: white; padding: 1rem 2rem; }
        nav { display: flex; justify-content: space-between; align-items: center; max-width: 1200px; margin: 0 auto; }
        nav h1 a { color: white; text-decoration: none; }
        .container { max-width: 1200px; margin: 2rem auto; padding: 0 2rem; }
        .alert { padding: 1rem; border-radius: 8px; margin-bottom: 1rem; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .create-post { background: white; padding: 2rem; border-radius: 8px; margin-bottom: 2rem; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .create-post h2 { margin-bottom: 1rem; color: #2c3e50; }
        .create-post input, .create-post textarea { width: 100%; padding: 0.75rem; margin-bottom: 1rem; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem; }
        .create-post button { background: #3498db; color: white; border: none; padding: 0.75rem 2rem; border-radius: 4px; cursor: pointer; font-size: 1rem; }
        .create-post button:hover { background: #2980b9; }
        .posts h2 { color: #2c3e50; margin-bottom: 1rem; }
        .post { background: white; padding: 1.5rem; border-radius: 8px; margin-bottom: 1rem; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .post h3 { color: #2c3e50; margin-bottom: 0.5rem; }
        .post .meta { color: #7f8c8d; font-size: 0.9rem; margin-bottom: 1rem; }
        .post .content { line-height: 1.6; color: #34495e; }
        .no-posts { text-align: center; color: #7f8c8d; padding: 2rem; }
    </style>
</head>
<body>
    <header>
        <nav>
            <h1><a href="/posts">Blog Tecno</a></h1>
        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>