<div>
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto rounded-xl">
        <!-- Card -->
        <div class="flex flex-col rounded-xl border border-white/30 p-4 sm:p-6 lg:p-8 bg-white/10 shadow-2xs">
            <div class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-md">
                <div class="min-w-full inline-block align-middle">
                    <div
                        class="rounded-xl shadow-2xs overflow-hidden">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center">
                            <div>
                                <h2 class="text-xl font-semibold text-neutral-200 ">
                                    All Pending Alumni Requests
                                </h2>
                                <p class="text-sm text-neutral-200">
                                    Manage all pending alumni requests
                                </p>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full text-xs sm:text-sm">
                            <thead class="bg-yellow-500">
                                <tr>
                                    <th class="ps-2 sm:ps-6 py-3 text-start font-extrabold uppercase text-green-700">
                                        ID
                                    </th>
                                    <th class="ps-2 sm:ps-6 py-3 text-start font-extrabold uppercase text-green-700">
                                        Name
                                    </th>
                                    <th class="hidden sm:table-cell px-2 sm:px-6 py-3 text-start font-extrabold uppercase text-green-700">
                                        Email
                                    </th>
                                    <th class="hidden md:table-cell px-2 sm:px-6 py-3 text-start font-extrabold uppercase text-green-700">
                                        Created
                                    </th>
                                    <th class="px-2 sm:px-6 text-start font-extrabold uppercase text-green-700">Actions</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-white/30">
                                @forelse ($this->users as $user)
                                    <tr>
                                        <td class="w-4 ps-2 sm:ps-6 py-3">
                                            <span class="block font-semibold text-neutral-200">
                                                {{ ($user->id) }}
                                            </span>
                                        </td>
                                        <td class="px-2 sm:px-6 py-3">
                                            <span class="block font-semibold text-neutral-200">
                                                {{ ($user->name) }}
                                            </span>
                                        </td>
                                        <td class="hidden sm:table-cell px-2 sm:px-6 py-3">
                                            <span class="block text-neutral-200">
                                                {{ $user->email }}
                                            </span>
                                        </td>
                                        <td class="hidden md:table-cell px-2 sm:px-6 py-3">
                                            <span class="text-neutral-200">
                                                {{ $user->created_at->diffForHumans() }}
                                            </span>
                                        </td>
                                        <td class="px-2 sm:px-6 py-1.5 text-start">
                                            <a href="#" wire:click.prevent="accept({{ $user->id }})"
                                                class="text-green-400 hover:underline">
                                                Accept
                                            </a>
                                            
                                            <!-- Divider only on large screens -->
                                            <div class="hidden lg:inline-block lg:px-1 text-neutral-200 font-extrabold">|</div>
                                            
                                            <a href="#" wire:click.prevent="decline({{ $user->id }})"
                                                class="text-red-600 hover:underline">
                                                Decline
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-2 sm:px-6 py-4 text-center text-neutral-200">
                                            No pending alumni requests found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-white/30">
                            <div>
                                <p class="text-sm text-neutral-200">
                                    <span class="font-semibold text-neutral-200">
                                        {{ $this->users->total() }}
                                    </span>
                                    results
                                </p>  
                            </div>
                            <div>
                                <div class="inline-flex gap-x-2">
                                    
                                    {{-- Prev Button --}}
                                    @if($this->users->onFirstPage()) 
                                        <button disabled
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-1 text-sm font-medium rounded-md border text-gray-400 cursor-not-allowed">
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 15l-6-6 6-6" />
                                            </svg>
                                            Prev
                                        </button>
                                    @else
                                        <button wire:click="previousPage"
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-1 text-sm font-medium rounded-md hover:shadow-md transition-all duration-200 bg-yellow-500 text-white hover:bg-yellow-600">
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 15l-6-6 6-6" />
                                            </svg>
                                            Prev
                                        </button>
                                    @endif

                                    {{-- Next Button --}}
                                    @if($this->users->hasMorePages())
                                        <button wire:click="nextPage"
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-0 text-sm font-medium rounded-md hover:shadow-md transition-all duration-200 bg-yellow-500 text-white hover:bg-yellow-600">
                                            Next
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 3l6 6-6 6" />
                                            </svg>
                                        </button>
                                    @else
                                        <button disabled
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-0 text-sm font-medium rounded-md border text-gray-400 cursor-not-allowed">
                                            Next
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 3l6 6-6 6" />
                                            </svg>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
</div>
