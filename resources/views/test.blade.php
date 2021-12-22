<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus maxime corporis eos rerum ad, temporibus vel odio pariatur officiis aut sit, distinctio soluta. Modi omnis molestiae veritatis voluptatem, nisi sequi quia in, itaque nobis ipsam laborum! Cum distinctio fuga ipsam quasi pariatur iusto quidem repellendus aliquid officia, nam aperiam soluta incidunt hic harum. Alias dolor quo voluptas eos, minima, temporibus tempore modi distinctio inventore cupiditate, quidem illum impedit explicabo cumque quam harum commodi in ipsam consequatur dolore? Placeat earum rerum at. Ipsum corporis ut recusandae, alias, consectetur eum, cumque officiis voluptas provident excepturi quae nisi nobis cum maiores vero. Voluptatum.
    </div>
  </div>



  <div class="flex flex-col">
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
            
          
        </div>
      </div>
    </div>
  </div>