<x-app-layout>

    <div>
        <div class="max-w-2xl  py-3">
            <div >
                <h6>
                    Announcement Form !
                </h6>
            </div>
            <div>
            
            </div>
            @if ($errors->any())
              
              @foreach ($errors->all() as $error)
                      <div class="flex flex-col my-3">
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-green-800" role="alert">
                      <span class="font-medium">
                          {{$error}}
                      </span> 
                    </div>
                    </div>
              @endforeach
               
            @endif
        </div>
        <div class="md:grid md:grid-cols-3 md:gap-6 ">
          <div class="mt-5 md:mt-0 md:col-span-2 ">
            <form action="{{ route('announcement.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">Name :</label>
                        <input type="text" name="name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                  </div>
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                      
                      <div>
                        <label for="about" class="block text-sm font-medium text-gray-700">
                          Description :
                        </label>
                        <div class="mt-1">
                          <textarea id="about" name="desc" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Input Text"></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">
                          Announcement 
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">User ID :</label>
                        <div class="flex justify-center">
                            <div class="mb-3 xl:w-96">
                              <select 
                              name="creater_id"
                            
                              class="form-select appearance-none
                              
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding bg-no-repeat
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  aria-label="multiple select example">
                                @foreach($users as $user)
                                <option value="{{ $user['id'] }}">
                                {{ $user['id'] }}
                                </option>
                                @endforeach
                                
                              </select>
                            </div>
                          </div>
                    </div>
                  </div>
                
    
                
     
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      

      
    </x-app-layout>
    