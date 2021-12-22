<x-app-layout>

    <div>
        <div class="max-w-2xl flex justify-between py-3">
            <div>
                <h6>
                    Update Form !
                </h6>
            </div>
            
        </div>
        <div class="md:grid md:grid-cols-3 md:gap-6 ">
          <div class="mt-5 md:mt-0 md:col-span-2 ">
            <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">Name :</label>
                        <input type="text" name="name" value="{{ $product->name}}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                  </div>
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">Details :</label>
                        <input type="text" name="details" value="{{$product->details}}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                  </div>
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">Price :</label>
                        <input type="text" name="price" value="{{$product->price}}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                  </div>
    
                  <div>
                    <label class="block text-sm font-medium text-gray-700">
                      Photo
                    </label>
                    <div class="mt-1 flex items-center">
                        
                        <img src="{{ Storage::url($product->image) }}" height="200" width="200" alt="" />
                        <input type="file" name="image">
                      <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                        <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                      </span>
                      <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Change
                      </button>
                    </div>
                  </div>
     
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      
    
      
    </x-app-layout>
    