<div>
    <!-- Hero -->
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Grid -->
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
            
            <!-- Left Content -->
            <div>
                <h1 class="block text-3xl font-bold text-black sm:text-4xl lg:text-6xl lg:leading-tight">
                    Welcome back, <span class="text-green-700">CSAV Alumni</span>
                </h1>
                <p class="mt-3 text-lg text-black">
                    Stay connected with your alma mater, explore alumni events, update your profile, and network with fellow graduates.
                </p>

                <!-- Buttons -->
                <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                    <a href="{{ route('alumni.profile') }}"
                       class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg 
                              bg-green-700 text-white hover:bg-green-600 focus:outline-hidden">
                        View Profile
                    </a>
                    <a href="#"
                       class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg 
                              bg-green-100 shadow-2xl text-black border border-transparent hover:bg-gray-200  focus:outline-hidden">
                        Alumni Events
                    </a>
                </div>
                <!-- End Buttons -->
            </div>
            <!-- End Left -->

            <!-- Right Image -->
            <div class="relative ms-4">
                <img class="w-full rounded-xl border-4 border-transparent"
                     src="https://images.pexels.com/photos/7942538/pexels-photo-7942538.jpeg"
                     alt="Alumni Gathering">
            </div>
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Hero -->
</div>
