@include('includes.header')


<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<div class="container max-w-full mx-auto py-10 px-6">
  <div class="font-sans">
  <div class="max-w-sm mx-auto px-6">
    <div class="relative flex flex-wrap">
      <div class="w-full relative">
        <div class="mt-1">
           <div class="mb-5 pb-1border-b-2 text-center font-base text-red-700">
            <p class="font-bold text-black text-2xl">Registration</p>
          </div>
          <div class="text-center font-semibold text-black">
            
          </div>
         
          <form class="mt-8" action="/addUser" method="post">
            @csrf
            <div class="mx-auto max-w-lg">
              <div class="py-2">
                <span class="px-1 text-sm text-gray-600">Username</span>
                <input name="name" value="{{ old('name') }}" placeholder="" type="text"
                    class="text-md block px-3 py-2  rounded-lg w-full 
                    bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                   
                   
             
              </div>
              <p class="text-red-500 text-xs mt-1"> @error('name'){{ $message }} @enderror  </p>
              <div class="mx-auto max-w-lg">
                <div class="py-1">
                <span class="px-1 text-sm text-gray-600">E-mail</span>
                <input name="email" value="{{ old('email') }}" placeholder="" type="text"
                    class="text-md block px-3 py-2  rounded-lg w-full 
                    bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
              <div class="py-2">
                <span class="px-1 text-sm text-gray-600">Password</span>
                <input name="password" value="{{ old('password') }}" placeholder="" type="password"
                    class="text-md block px-3 py-2  rounded-lg w-full 
                    bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
              <div class="py-2">
                <span class="px-1 text-sm text-gray-600">Confirm Password</span>
                <input name="password_confirmation" placeholder="" type="password"
                    class="text-md block px-3 py-2  rounded-lg w-full 
                    bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                </div>
              
               <button class="mt-3 text-base font-semibold 
                    bg-gray-800 w-full text-white rounded-lg
                    px-6 py-3 block shadow-xl hover:text-white hover:bg-black"> Register
              </button>
                <label class="block text-gray-500 font-bold my-6 text-center">  
                    <a href="/" class="cursor-pointer tracking-tighter text-blue-500 border-b-2 border-gray-200 hover:border-gray-400"><span>Return to login</span></a>
                </label>
            </div>
          </form>
       
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@include('includes.footer')