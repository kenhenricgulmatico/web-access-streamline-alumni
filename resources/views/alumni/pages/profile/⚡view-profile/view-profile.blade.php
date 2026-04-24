<div class="max-w-2xl mx-auto p-6 bg-white/10 backdrop-blur-md rounded-2xl border border-white/30 shadow-lg text-white space-y-6">

    <!-- Profile Information -->
    <h2 class="text-2xl font-bold">Profile Information</h2>

    <div class="space-y-2">
        <p><span class="font-semibold">Name:</span> {{ $this->alumni->name }}</p>
        <p><span class="font-semibold">Email:</span> {{ $this->alumni->email }}</p>
    </div>

    <!-- Edit Button -->
    <div class="mt-4">
        <a href="{{ route('alumni.profile.edit', $this->alumni->id) }}"
            class="bg-yellow-400 text-green-900 px-4 py-2 rounded-lg font-semibold hover:bg-yellow-500 transition">
            Edit Personal Info
        </a>
    </div>

    <h2 class="text-2xl font-bold">Education Background</h2>
    <div class="space-y-2">
        <p><span class="font-semibold">Course:</span> {{ $this->alumni->course }}</p>
        <p><span class="font-semibold">Year Graduated:</span> {{ $this->alumni->year_graduated }}</p>
    </div>
</div>
