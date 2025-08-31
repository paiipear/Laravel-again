<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Produk</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
    
  <div class="container mx-auto px-6 py-8">
    <a href="/products/create"  class="px-3 py-2  bg-teal-300 text-white rounded-lg hover:bg-teal-600 transition">Create Product</a>
    <h1 class="text-2xl font-bold mb-6 mt-5">List Produk</h1>

    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
        <thead class="bg-gray-100">
          <tr>
            <th class="py-3 px-4 border-b text-left">No</th>
            <th class="py-3 px-4 border-b text-left">Name</th>
            <th class="py-3 px-4 border-b text-left">Description</th>
            <th class="py-3 px-4 border-b text-left">Category Name</th>
            <th class="py-3 px-4 border-b text-center">Price</th>
            <th class="py-3 px-4 border-b text-center">Image</th>
            <th class="py-3 px-4 border-b text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          
         @foreach ($products as $product)              
         <tr class="hover:bg-gray-50">
           <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
           <td class="py-2 px-4 border-b">{{ $product->name }}</td>
           <td class="py-2 px-4 border-b">{{ $product->description }}</td>
           <td class="py-2 px-4 border-b">{{ $product->categoryName }}</td>
           <td class="py-2 px-4 border-b text-center">{{ $product->price }}</td>
           <td class="py-2 px-4 border-b text-center">
               <img src="{{ asset('storage/' . $product->image) }}" 
                alt="{{ $product->name }}" 
                class="w-16 h-16 object-cover mx-auto rounded">   
            </td>
           <td>
            <form action="/products/{{ $product->id }}" method="POST" onsubmit="return confirm('Are you sure?')" class="text-center" >
                @csrf
                @method('DELETE')
                <button type="submit"  class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">Delete</button>
                <a href="/products/{{ $product->id }}/edit"  class="px-3 py-1 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition">Update</a>
            </form>
           </td>
         </tr>
      
         @endforeach($products as $product)
       
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
