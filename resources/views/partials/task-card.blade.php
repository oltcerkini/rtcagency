<div class="task-card bg-white rounded-lg shadow p-4 cursor-move hover:shadow-md transition"
     data-task-id="{{ $task->id }}"
     draggable="true">
    
    <div class="flex justify-between items-start mb-2">
        <h4 class="font-medium text-gray-800">{{ $task->title }}</h4>
        <div class="flex items-center space-x-1">
            @switch($task->priority)
                @case(4)
                    <span class="px-2 py-1 text-xs bg-red-100 text-red-800 rounded">Urgent</span>
                    @break
                @case(3)
                    <span class="px-2 py-1 text-xs bg-orange-100 text-orange-800 rounded">High</span>
                    @break
                @case(2)
                    <span class="px-2 py-1 text-xs bg-blue-100 text-blue-800 rounded">Medium</span>
                    @break
                @default
                    <span class="px-2 py-1 text-xs bg-gray-100 text-gray-800 rounded">Low</span>
            @endswitch
        </div>
    </div>
    
    @if($task->description)
        <p class="text-sm text-gray-600 mb-3 line-clamp-2">
            {{ Str::limit(strip_tags($task->description), 100) }}
        </p>
    @endif
    
    <div class="flex items-center justify-between text-sm text-gray-500">
        <div class="flex items-center space-x-2">
            @if($task->due_date)
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ $task->due_date->format('M d') }}
                </span>
            @endif
            
            @if($task->labels)
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                    {{ count($task->labels) }}
                </span>
            @endif
        </div>
        
        <button wire:click="$dispatch('open-modal', { component: 'edit-task-modal', arguments: { taskId: {{ $task->id }} } })"
                class="text-gray-400 hover:text-gray-600">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </button>
    </div>
</div>