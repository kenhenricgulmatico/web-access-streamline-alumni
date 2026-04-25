<div class="max-w-2xl mx-auto p-6 bg-green-50 backdrop-blur-md rounded-2xl border border-white/30 shadow-2xl text-black space-y-6">

    <!-- Profile Information -->
    <h2 class="text-2xl font-bold">Profile Information</h2>

    <div class="space-y-2">
        <p><span class="font-semibold">Name:</span> {{ $this->alumni->name }}</p>
        <p><span class="font-semibold">Email:</span> {{ $this->alumni->email }}</p>
    </div>
    <!-- Update Button -->
    <div class="mt-4">
        <a href="{{ route('alumni.name-password.update', $this->alumni->id) }}"
            class="bg-green-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-600 transition">
            Update Name and Password
        </a>
    </div>

    <h2 class="text-2xl font-bold">Education Background</h2>

    @if ($this->alumniProfile)
        <div class="space-y-2">
            <p><span class="font-semibold">Permanent Address:</span> {{ $this->alumniProfile->permanent_address }}</p>
            <p><span class="font-semibold">Current Address:</span> {{ $this->alumniProfile->current_address }}</p>
            <p><span class="font-semibold">Gender:</span> {{ ucfirst($this->alumniProfile->gender) }}</p>
            <p><span class="font-semibold">Contact Number:</span> {{ $this->alumniProfile->phone_number_1 }}</p>
            <p><span class="font-semibold">Batch Year Graduated:</span> {{ $this->alumniProfile->batch->batch_year }} - {{ $this->alumniProfile->batch->batch_year + 1 }}</p>

        </div>
    @else
        @if ($this->alumni->hasRole('super-admin'))
            <div class="text-black italic">No alumni profile info available.</div>
        @endif
    @endif
    
        <!-- Update Button -->
        <div class="mt-4">
            <a href="{{ route('alumni.profile.update', $this->alumni->id) }}"
                class="bg-green-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-600 transition">
                Update Personal Info
            </a>
        </div>
</div>
