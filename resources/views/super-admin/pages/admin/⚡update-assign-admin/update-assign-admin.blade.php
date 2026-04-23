<div>
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto rounded-xl">
    <div class="mt-12 max-w-full mx-auto">
      <!-- Card -->
      <div class="flex flex-col border border-white/30 rounded-xl p-4 sm:p-6 lg:p-8 bg-white/10 shadow-2xs">

        <!-- Back Button -->
        <div class="mb-4">
          <a href="{{ route('super-admin.assign.view') }}"
            class="inline-flex items-center gap-x-2 px-3 py-2 text-sm font-medium
              border border-transparent rounded-lg bg-yellow-500 text-white
              hover:bg-yellow-600 hover:text-white focus:outline-hidden">
            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M15 15l-6-6 6-6" />
            </svg>
            <span>Back</span>
          </a>
        </div>

        <!-- Title -->
        <h2 class="mb-8 text-xl font-semibold text-white">
          Update Program Head
        </h2>

        <!-- Form -->
        <form wire:submit.prevent='update'>
          <div class="grid gap-4 lg:gap-6">
            
        <!-- User -->
        <div>
        <label for="user_id"
            class="block mb-2 text-sm font-medium text-white">Select User</label>
        <select wire:model.defer='user_id' id="user_id"
            class="py-2.5 sm:py-3 px-4 block w-full rounded-lg border border-white/30 
                bg-green-700 text-white focus:outline-none focus:ring-2 focus:ring-yellow-400">
            <option value=""> Choose User </option>
            @foreach($this->users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        @error('user_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <!-- Department -->
        <div>
        <label for="department_id"
            class="block mb-2 text-sm font-medium text-white">Select Department</label>
        <select wire:model.defer='department_id' id="department_id"
            class="py-2.5 sm:py-3 px-4 block w-full rounded-lg border border-white/30 
                bg-green-700 text-white focus:outline-none focus:ring-2 focus:ring-yellow-400">
            <option value=""> Choose Department </option>
            @foreach($this->departments as $department)
            <option value="{{ $department->id }}">{{ $department->department_name }}</option>
            @endforeach
        </select>
        @error('department_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>


          <!-- Update Button -->
          <div class="mt-6 grid">
            <button type="submit"
              class="w-50 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-white/30 bg-yellow-500 text-white hover:bg-yellow-600 focus:outline-hidden">
              Update
            </button>
          </div>
        </form>
      </div>
      <!-- End Card -->
    </div>
  </div>
</div>
