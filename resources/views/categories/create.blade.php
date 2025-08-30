<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
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

    @if(session('success'))
        <div style="background:#d1fae5;color:#065f46;padding:16px;margin:16px auto;max-width:650px;border-radius:8px;width:100%;">
            {{ session('success') }}
        </div>
        
    @endif
     <main style="flex:1;display:flex;align-items:center;justify-content:center;padding:40px 16px;">
        <div style="max-width:650px;width:100%;background:#fff;border-radius:8px;padding:32px 28px;box-shadow:0 4px 12px rgba(0,0,0,0.08);">
            <h1 style="font-size:2rem;margin-bottom:10px;color:#111827;">{{ $title }}</h1>

            <form action="/categories/create" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="margin-bottom:16px;margin-right:25px;">
                    <label style="display:block;margin-bottom:6px;color:#374151;font-weight:500; ">Category Name</label>
                    <input type="text" placeholder="Category Name" style="width:100%;padding:12px 14px;border:1px solid #d1d5db;border-radius:6px;font-size:1rem;" name="categoryName" required>
                </div>

                <button type="submit" style="background:#21d9d0;color:#fff;padding:12px 28px;border:none;border-radius:6px;font-size:1rem;font-weight:500;cursor:pointer;display:block;margin-left:auto;">
                    submit
                </button>
            </form>
        </div>

    </main>

     <!-- Footer -->
    {{-- <footer style="background:#fff;border-top:1px solid #e5e7eb;padding:16px 0;">
        <div style="max-width:1200px;margin:0 auto;padding:0 24px;text-align:center;color:#6b7280;font-size:0.875rem;">
            &copy; {{ date('Y') }} Lunalux. All rights reserved.
        </div>
    </footer> --}}

    
</body>
</html>