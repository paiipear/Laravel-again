<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNALUX</title>
</head>
<body style="min-height:100vh;display:flex;flex-direction:column;">

    <!-- Header -->
    <header style="background:#fff;box-shadow:0 2px 4px rgba(0,0,0,0.05);">
        <div style="max-width:1200px;margin:0 auto;padding:16px 24px;display:flex;justify-content:space-between;align-items:center;">
            <span style="font-weight:bold;font-size:1.25rem;color:#21d9d0;">Lunalux page</span>
            <nav>
                <a href="/" style="margin-right:16px;color:#374151;text-decoration:none;">Home</a>
                <a href="/about" style="margin-right:16px;color:#374151;text-decoration:none;">About</a>
                <a href="/contact" style="color:#374151;text-decoration:none;">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Main -->
    <main style="flex:1;display:flex;align-items:center;justify-content:center;">
        <div style="text-align:center;max-width:600px;padding:64px 16px;">
            <h1 style="font-size:2.25rem;font-weight:bold;margin-bottom:16px;">Welcome to LunaluxPage</h1>
            <p style="font-size:1.125rem;color:#6b7280;margin-bottom:32px;">Hello, I'm Lunalux</p>
            <a href="#" style="display:inline-block;padding:12px 32px;background:#21d9d0;color:#fff;border-radius:8px;text-decoration:none;font-weight:500;">Get Started</a>
        </div>
    </main>

    <!-- Footer -->
    <footer style="background:#fff;border-top:1px solid #e5e7eb;padding:16px 0;">
        <div style="max-width:1200px;margin:0 auto;padding:0 24px;text-align:center;color:#6b7280;font-size:0.875rem;">
            &copy; {{ date('Y') }} Lunalux. All rights reserved.
        </div>
    </footer>
</body>