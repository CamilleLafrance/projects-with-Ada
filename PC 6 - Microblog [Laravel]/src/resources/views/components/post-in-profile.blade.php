<div class='flex max-w-xl mx-auto my-10 overflow-hidden bg-white rounded-lg shadow-md'>

    <div class='flex items-center w-full'>
      <div class='w-full'>
        <div class="flex flex-row px-2 py-3 mx-3 mt-2">
          <div class="w-auto h-auto border-2 border-pink-500 rounded-full">
            <img class='object-cover w-12 h-12 border-2 rounded-full shadow cursor-pointer border-white-500' alt='User avatar' src='https://source.unsplash.com/nBJHO6wmRWw/200x200j'>
          </div>
          <div class="flex flex-col mt-1 mb-2 ml-4">
            <div class='flex w-full mt-1'>
              <div class='mr-1 text-xs text-blue-700 cursor-pointer font-base'>
                Saint Paul, MN
              </div>
              <div class='text-xs font-thin text-gray-400'>
                • 30 seconds ago
              </div>
            </div>
          </div>
        </div>
        <div class="border-b border-gray-100"></div>
        <div class='px-2 mx-3 mt-6 text-sm font-medium text-gray-400 mb-7'><img class="rounded" src={{$postInProfile->img_url}}></div>
        <div class='px-2 mx-3 mb-2 text-lg font-medium text-gray-600'>{{$postInProfile->description}}</div>
        <div class='px-2 mx-3 mb-6 text-sm font-light text-gray-500'>{{$postInProfile->body}}</div>
        <div class="flex w-full border-t border-gray-100">
          <div class="flex flex-row mx-5 my-3">
            <div class='flex items-center mb-2 mr-4 text-sm font-normal text-gray-700 rounded-md'>Comments:<div class="ml-1 font-light text-gray-500 text-ms"> 30</div></div>
            <div class='flex items-center mb-2 mr-4 text-sm font-normal text-gray-700 rounded-md'>Views: <div class="ml-1 font-light text-gray-500 text-ms"> 60k</div></div>
          </div>
          <div class="flex justify-end w-full mx-5 my-3">
            <div class='flex items-center mb-2 mr-4 text-sm font-normal text-gray-700 rounded-md'>Likes: <div class="ml-1 font-light text-gray-500 text-ms"> 120k</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  