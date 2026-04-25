<div class="max-w-md mx-auto p-6 bg-green-50 rounded-2xl border border-transparent shadow-2xl text-black space-y-6">

    <h2 class="text-2xl font-bold">Update Profile</h2>

    <form wire:submit.prevent="update" class="space-y-4">
        <div>
            <label class="block text-sm mb-1">Name</label>
            <input type="text" wire:model.defer="name"
                class="w-full px-4 py-2 rounded-lg border border-black text-black placeholder:text-black focus:outline-none focus:ring-2 focus:ring-green-700">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm mb-1">New Password</label>
            <input type="password" wire:model.defer="password"
                class="w-full px-4 py-2 rounded-lg border border-black text-black placeholder:text-black focus:outline-none focus:ring-2 focus:ring-green-700">
            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm mb-1">Confirm Password</label>
            <input type="password" wire:model.defer="password_confirmation"
                class="w-full px-4 py-2 rounded-lg border border-black text-black placeholder:text-black focus:outline-none focus:ring-2 focus:ring-green-700">
        </div>

        <button type="submit"
            class="bg-green-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-600 transition">
            Save Changes
        </button>
        <a href="{{ route('alumni.profile') }}"
            class="bg-green-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-600 transition">
            Back
        </a>
    </form>

    @if (session('success'))
        <div class="mt-4 text-green-700 font-semibold">
            {{ session('success') }}
        </div>
    @endif
</div>
