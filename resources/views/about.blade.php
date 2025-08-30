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
   <!-- Main Content -->
    <main style="flex:1;display:flex;align-items:center;justify-content:center;padding:40px 16px;">
        <div style="max-width:900px;display:flex;flex-wrap:wrap;align-items:center;gap:40px;">
            
            <!-- Profile Image -->
            <div style="flex:1;min-width:250px;text-align:center;">
                <img src="{{ asset('images/mikazuki.png') }}" alt="Profile" style="width:250px;height:250px;border-radius:50%;object-fit:cover;box-shadow:0 4px 12px rgba(0,0,0,0.1);">
            </div>

            <!-- About Text -->
            <div style="flex:2;min-width:280px;">
                <h1 style="font-size:2rem;margin-bottom:10px;color:#111827;">Hi, I'm Lunalux</h1>
                <p style="font-size:1rem;line-height:1.6;color:#4b5563;margin-bottom:20px;">
                    I’m a passionate web developer and designer who loves crafting clean, modern, and user-friendly websites.
                    With experience in HTML, CSS, JavaScript, and frameworks like TailwindCSS, I aim to create digital experiences
                    that are both functional and beautiful.
                </p>
                <p style="font-size:1rem;line-height:1.6;color:#4b5563;margin-bottom:30px;">
                    In my free time, I enjoy exploring new design trends, learning new coding techniques, and
                    working on personal projects that challenge my creativity.
                </p>
                <a href="/portfolio" style="display:inline-block;padding:12px 28px;background:#21d9d0;color:#fff;border-radius:6px;text-decoration:none;font-weight:500;">View Portfolio</a>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer style="background:#fff;border-top:1px solid #e5e7eb;padding:16px 0;">
        <div style="max-width:1200px;margin:0 auto;padding:0 24px;text-align:center;color:#6b7280;font-size:0.875rem;">
            &copy; {{ date('Y') }} Lunalux. All rights reserved.
        </div>
    </footer>
</body>