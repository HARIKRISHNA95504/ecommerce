<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Online Store</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <!-- Header -->
  <header class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0">
      <h1 class="text-2xl font-bold font-serif text-center sm:text-left">HK Store</h1>
      <nav class="flex flex-wrap justify-center sm:justify-end items-center gap-2 sm:gap-4">
        <a href="pages/login.php" class="text-black font-serif border border-none rounded px-4 py-2 hover:bg-blue-500 hover:text-white transition">Login</a>
        <a href="pages/register.php" class="text-black font-serif border border-none rounded px-4 py-2 hover:bg-blue-500 hover:text-white transition">Register</a>
        <a href="pages/cart.php" class="flex items-center text-black font-serif border border-none rounded px-4 py-2 hover:bg-blue-500 hover:text-white transition">
          <img src="images/cart-icon.png" alt="Cart" class="w-5 h-5 mr-2" />
          Cart
        </a>
        <form method="POST" class="inline">
          <button type="submit" name="logout" class="text-black font-serif border border-none rounded px-4 py-2 hover:bg-red-600 hover:text-white transition">
            Logout
          </button>
        </form>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h2 class="text-xl font-semibold mb-6 text-center sm:text-left">Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 product-list">
      <!-- PHP to display products will go here -->
    </div>
  </main>

  <!-- Footer --> 
  <!-- Custom Footer Section -->
<footer class="bg-[#012b47] text-white py-10">
  <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
    
    <!-- Our Mission -->
    <div>
      <h2 class="text-xl font-serif font-bold mb-4">Our Mission</h2>
      <p class="text-sm leading-relaxed mb-4">
        So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved us Ian Gathering thing us land years living.
      </p>
      <p class="text-sm leading-relaxed">
        So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved.
      </p>
    </div>

    <!-- Quick Links -->
    <div>
      <h2 class="text-xl font-bold mb-4">Quick Links</h2>
      <ul class="space-y-2 text-sm">
        <li><a href="pages/register.php" class="hover:underline">Login</a></li>
        <li><a href="#" class="hover:underline">Shop</a></li>
        <li><a href="#" class="hover:underline">Blog</a></li>
        <li><a href="#" class="hover:underline">Product</a></li>
        <li><a href="#" class="hover:underline">Brand</a></li>
        <li><a href="#" class="hover:underline">Contact</a></li>
      </ul>
    </div>

    <!-- Gallery -->
    <div>
      <h2 class="text-xl font-bold mb-4">Gallery</h2>
      <div class="grid grid-cols-3 gap-2">
        <img src="images/r1.jpg.webp" alt="Gallery 1" class="w-full h-20 object-cover rounded" />
        <img src="images/gallery2.jpg" alt="Gallery 2" class="w-full h-20 object-cover rounded" />
        <img src="images/gallery3.jpg" alt="Gallery 3" class="w-full h-20 object-cover rounded" />
        <img src="images/gallery4.jpg" alt="Gallery 4" class="w-full h-20 object-cover rounded" />
        <img src="images/gallery5.jpg" alt="Gallery 5" class="w-full h-20 object-cover rounded" />
        <img src="images/gallery6.jpg" alt="Gallery 6" class="w-full h-20 object-cover rounded" />
      </div>
    </div>

    <!-- Contact Us -->
    <div>
      <h2 class="text-xl font-bold mb-4">Contact Us</h2>
      <ul class="space-y-4 text-sm">
        <li class="flex items-start gap-3">
          <div class="bg-blue-600 p-2 rounded-full">
            <svg class="w-5 h-5" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24">
              <path d="M12 2l7 7-7 7-7-7 7-7z" />
            </svg>
          </div>
          <div>
            <p class="font-semibold">Head Office</p>
            <p>123, Main Street,Hyderabad</p>
          </div>
        </li>
        <li class="flex items-start gap-3">
          <div class="bg-blue-600 p-2 rounded-full">
            <svg class="w-5 h-5" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24">
              <path d="M3 5a2 2 0 012-2h2a2 2 0 012 2v2h4V5a2 2 0 012-2h2a2 2 0 012 2v2h-1" />
              <path d="M16 7v2a6 6 0 01-6 6H6a6 6 0 01-6-6V7" />
            </svg>
          </div>
          <div>
            <p class="font-semibold">Phone Number</p>
            <p>+123 456 7890</p>
            <p>+123 456 7890</p>
          </div>
        </li>
        <li class="flex items-start gap-3">
          <div class="bg-blue-600 p-2 rounded-full">
            <svg class="w-5 h-5" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24">
              <path d="M4 4h16v16H4z" />
              <path d="M22,6l-10,7L2,6" />
            </svg>
          </div>
          <div>
            <p class="font-semibold">Email</p>
            <p>free@infoexample.com</p>
            <p>www.infoexample.com</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</footer>
<footer>
    <div class="bg-[#012b40] shadow-inner ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 text-center text-sm text-white">
      &copy; <?= date('Y'); ?> Online Store. All rights reserved.
    </div>
</div>
</footer>
</body>
</html>
