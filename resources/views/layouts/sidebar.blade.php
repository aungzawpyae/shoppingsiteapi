<div class="sidebar bg-blue-800 text-blue-100 w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
                  
    <!-- logo -->
    <a href="#" class="text-white flex items-center space-x-2 px-4">
      <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
      </svg>
      <span class="text-2xl font-extrabold">Better Dev</span>
    </a>

    <!-- nav -->
    <nav>
      
      <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
        Home
      </a>
      <a href="{{ route('products.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
        Product
      </a>
      <a href="{{ route('collection.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
        Product Collection
      </a>
      <a href="{{ route('banners.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
        Banner
      </a>
      <a href="{{ route('announcement.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
        Announcement 
      </a>
    </nav>
  </div>