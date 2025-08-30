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
        <div style="max-width:650px;width:100%;background:#fff;border-radius:8px;padding:32px 28px;box-shadow:0 4px 12px rgba(0,0,0,0.08);">
            <h1 style="font-size:2rem;margin-bottom:10px;color:#111827;">Get in Touch</h1>
            <p style="font-size:1rem;line-height:1.6;color:#4b5563;margin-bottom:30px;">
                Have a question, project idea, or just want to say hi?  
                Fill out the form below and I’ll get back to you as soon as possible.
            </p>

            <form>
                <div style="margin-bottom:16px;margin-right:25px;">
                    <label style="display:block;margin-bottom:6px;color:#374151;font-weight:500;">Name</label>
                    <input type="text" placeholder="Your Name" style="width:100%;padding:12px 14px;border:1px solid #d1d5db;border-radius:6px;font-size:1rem;">
                </div>

                <div style="margin-bottom:16px;margin-right:25px;">
                    <label style="display:block;margin-bottom:6px;color:#374151;font-weight:500;">Email</label>
                    <input type="email" placeholder="Your Email" style="width:100%;padding:12px 14px;border:1px solid #d1d5db;border-radius:6px;font-size:1rem;">
                </div>

                <div style="margin-bottom:20px;margin-right:25px;">
                    <label style="display:block;margin-bottom:6px;color:#374151;font-weight:500;">Message</label>
                    <textarea placeholder="Your Message" rows="5" style="width:100%;padding:12px 14px;border:1px solid #d1d5db;border-radius:6px;font-size:1rem;resize:none;"></textarea>
                </div>

                <button type="submit" style="background:#21d9d0;color:#fff;padding:12px 28px;border:none;border-radius:6px;font-size:1rem;font-weight:500;cursor:pointer;display:block;margin-left:auto;">
                    Send Message
                </button>
            </form>
        </div>

    </main>

     <!-- Footer -->
    <footer style="background:#fff;border-top:1px solid #e5e7eb;padding:16px 0;">
        <div style="max-width:1200px;margin:0 auto;padding:0 24px;text-align:center;color:#6b7280;font-size:0.875rem;">
            &copy; {{ date('Y') }} Lunalux. All rights reserved.
        </div>
    </footer>
</body>