<div>
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto rounded-xl">
    <div class="mt-12 max-w-full mx-auto">
      <!-- Card -->
      <div class="flex flex-col border border-transparent rounded-xl p-4 sm:p-6 lg:p-8 bg-green-50 shadow-2xl">

        <!-- Back Button -->
        <div class="mb-4">
          <a href="{{ route('super-admin.batch.view') }}"
            class="inline-flex items-center gap-x-2 px-3 py-2 text-sm font-medium
              border border-transparent rounded-lg bg-green-700 text-white
              hover:bg-green-600 focus:outline-hidden">
            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M15 15l-6-6 6-6" />
            </svg>
            <span>Back</span>
          </a>
        </div>

        <!-- Title -->
        <h2 class="mb-8 text-xl font-semibold text-black">
          Create Batch Year
        </h2>

        <!-- Form -->
        <form wire:submit.prevent="create" class="space-y-4">
            <div>
                <label class="block text-sm mb-1 text-black">Batch Year</label>
                <input type="number" wire:model.defer="batch_year"
                    min="1900" max="{{ date('Y') }}"
                    class="w-full px-4 py-2 rounded-lg border border-black text-black placeholder:text-black focus:outline-none focus:ring-2 focus:ring-green-700"
                    placeholder="e.g. 2026">
                @error('batch_year')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit"
                class="bg-green-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-600 transition">
                Create
            </button>
        </form>

        @if (session('success'))
            <div class="mt-4 text-green-700 font-semibold">
                {{ session('success') }}
            </div>
        @endif

      </div>
      <!-- End Card -->
    </div>
  </div>
</div>
