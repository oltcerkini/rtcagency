<div class="space-y-6 p-4">
    <!-- Header Section -->
    <div class="border-b pb-4">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-lg font-semibold text-gray-900">
                    Message from {{ $contact->name }}
                </h3>
                <p class="text-sm text-gray-500 mt-1">
                    Received on {{ $contact->created_at->format('F j, Y \a\t g:i A') }}
                </p>
            </div>
            <div class="flex items-center space-x-2">
                @if($contact->read_at)
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Read
                    </span>
                @else
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Unread
                    </span>
                @endif
            </div>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-4">
            <div>
                <h4 class="text-sm font-medium text-gray-500 mb-2">Contact Information</h4>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Name</p>
                            <p class="text-sm text-gray-600">{{ $contact->name }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Email</p>
                            <a href="mailto:{{ $contact->email }}" class="text-sm text-blue-600 hover:text-blue-800 hover:underline">
                                {{ $contact->email }}
                            </a>
                        </div>
                    </div>
                    
                    @if($contact->phone)
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Phone</p>
                            <a href="tel:{{ $contact->phone }}" class="text-sm text-blue-600 hover:text-blue-800 hover:underline">
                                {{ $contact->phone }}
                            </a>
                        </div>
                    </div>
                    @endif
                    
                    @if($contact->subject)
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Subject</p>
                            <p class="text-sm text-gray-600">{{ $contact->subject }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="space-y-4">
            <div>
                <h4 class="text-sm font-medium text-gray-500 mb-2">Status Information</h4>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Submission Time</p>
                            <p class="text-sm text-gray-600">{{ $contact->created_at->format('M j, Y g:i A') }}</p>
                        </div>
                    </div>
                    
                    @if($contact->read_at)
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Read At</p>
                            <p class="text-sm text-gray-600">{{ $contact->read_at->format('M j, Y g:i A') }}</p>
                        </div>
                    </div>
                    @endif
                    
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Contact ID</p>
                            <p class="text-sm text-gray-600">#{{ $contact->id }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Message Content -->
    <div class="border-t pt-6">
        <h4 class="text-sm font-medium text-gray-500 mb-4">Message Content</h4>
        <div class="bg-gray-50 rounded-lg p-4">
            <div class="prose max-w-none">
                <p class="whitespace-pre-line text-gray-700">{{ $contact->message }}</p>
            </div>
        </div>
    </div>

    <!-- Actions (if needed) -->
    <div class="border-t pt-4 flex justify-end space-x-3">
        @if(!$contact->read_at)
            <button type="button" onclick="markAsRead({{ $contact->id }})" 
                    class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-800 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Mark as Read
            </button>
        @endif
        
        <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject ?: 'Your Message' }}" 
           class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            Reply via Email
        </a>
    </div>
</div>

@push('scripts')
<script>
function markAsRead(contactId) {
    fetch(`/admin/contacts/${contactId}/mark-as-read`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => {
        if (response.ok) {
            location.reload();
        }
    });
}
</script>
@endpush