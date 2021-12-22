
  

  <x-app-layout>
    
    <div class="">
        <div class="max-w-2xl flex justify-between py-3">
            <div>
                <h6>
                    Banner List
                </h6>
            </div>
            <div class="">
                    <a href="{{route('banners.create')}}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      Create
                    </a>
            </div>
        </div>

        
        <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col ">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
         
          
          
        @if ($message = Session::get('success'))
              <div class="flex-1 my-3">
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
              <span class="font-medium">
                  {{$message}}
              </span> 
            </div>
            </div>
        @endif
            
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  ID
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Image
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Title 
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Status
                </th>
                
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($banners as $banner)
                    
                
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{$banner->id}}</div>
                 
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                      <img class="h-10 w-10 rounded-full" src="{{ Storage::url($banner->image) }}" alt="">
                    </div>
                    
                  </div>
                </td>
               
                
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$banner->name}}</div>
                   
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    @if (!$banner->active == 0)
                    <div class="text-sm text-gray-900">True</div>
                    @else
                    <div class="text-sm text-gray-900">False</div>
                    @endif
                    
                   
                  </td>
              
                <td class=" px-1 py-4 whitespace-nowrap text-right text-sm font-medium flex">
                  <a href="{{route('banners.edit',$banner->id)}}" class="pr-5 text-indigo-600 hover:text-indigo-900">Edit</a>
                  <form action="{{route('banners.destroy',$banner->id)}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <button href="#" class="text-red-600 hover:text-indigo-900">Delete</button>
                 </form>
                </td>
              </tr>
              @endforeach
              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
      </div>
      
    
      
 </x-app-layout>