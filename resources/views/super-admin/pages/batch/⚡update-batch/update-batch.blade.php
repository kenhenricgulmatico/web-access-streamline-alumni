<div>
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto rounded-xl">
    <div class="mt-12 max-w-full mx-auto">
      <!-- Card -->
      <div class="flex flex-col border border-white/30 rounded-xl p-4 sm:p-6 lg:p-8 bg-white/10 shadow-2xs">

        <!-- Back Button -->
        <div class="mb-4">
          <a href="{{ route('super-admin.batch.view') }}"
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
          Update Batch Year
        </h2>

        <!-- Form -->
        <form wire:submit.prevent="update" class="space-y-4">
            <div>
                <label class="block text-sm mb-1 text-white">Batch Year</label>
                <input type="number" wire:model.defer="batch_year"
                    min="1900" max="{{ date('Y') }}"
                    class="w-full px-4 py-2 rounded-lg bg-white/5 border border-white/30 text-white"
                    placeholder="e.g. 2026">
                @error('batch_year')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit"
                class="bg-yellow-400 text-green-900 px-4 py-2 rounded-lg font-semibold hover:bg-yellow-500 transition">
                Update Batch
            </button>
        </form>

        @if (session('success'))
            <div class="mt-4 text-green-400 font-semibold">
                {{ session('success') }}
            </div>
        @endif

      </div>
      <!-- End Card -->
    </div>
  </div>
</div>
