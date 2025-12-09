<div>
    <div class="p-6 bg-white rounded-lg shadow">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Task Board</h2>
            <button wire:click="$toggle('creatingTask')" 
                    class="px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition">
                + New Task
            </button>
        </div>

        @if($creatingTask)
        <div class="mb-6 p-4 bg-gray-50 rounded-lg">
            <h3 class="text-lg font-semibold mb-4">Create New Task</h3>
            {{ $this->form }}
            <div class="flex justify-end space-x-2 mt-4">
                <button wire:click="$set('creatingTask', false)" 
                        class="px-4 py-2 text-gray-600 hover:text-gray-800">
                    Cancel
                </button>
                <button wire:click="createTask" 
                        class="px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700">
                    Create Task
                </button>
            </div>
        </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- To Do Column -->
            <div class="bg-gray-50 rounded-lg p-4">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold text-gray-700">To Do</h3>
                    <span class="bg-gray-200 text-gray-700 px-2 py-1 rounded-full text-sm">
                        {{ count($todoTasks) }}
                    </span>
                </div>
                <div class="space-y-3" x-data x-sortable x-on:sorted.window="$wire.updateTaskOrder($event.detail)">
                    @foreach($todoTasks as $task)
                        @include('filament.widgets.partials.task-card', ['task' => $task])
                    @endforeach
                </div>
            </div>

            <!-- In Progress Column -->
            <div class="bg-blue-50 rounded-lg p-4">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold text-blue-700">In Progress</h3>
                    <span class="bg-blue-200 text-blue-700 px-2 py-1 rounded-full text-sm">
                        {{ count($inProgressTasks) }}
                    </span>
                </div>
                <div class="space-y-3">
                    @foreach($inProgressTasks as $task)
                        @include('filament.widgets.partials.task-card', ['task' => $task])
                    @endforeach
                </div>
            </div>

            <!-- Review Column -->
            <div class="bg-yellow-50 rounded-lg p-4">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold text-yellow-700">Review</h3>
                    <span class="bg-yellow-200 text-yellow-700 px-2 py-1 rounded-full text-sm">
                        {{ count($reviewTasks) }}
                    </span>
                </div>
                <div class="space-y-3">
                    @foreach($reviewTasks as $task)
                        @include('filament.widgets.partials.task-card', ['task' => $task])
                    @endforeach
                </div>
            </div>

            <!-- Done Column -->
            <div class="bg-green-50 rounded-lg p-4">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold text-green-700">Done</h3>
                    <span class="bg-green-200 text-green-700 px-2 py-1 rounded-full text-sm">
                        {{ count($doneTasks) }}
                    </span>
                </div>
                <div class="space-y-3">
                    @foreach($doneTasks as $task)
                        @include('filament.widgets.partials.task-card', ['task' => $task])
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @script
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Make tasks draggable between columns
            const taskCards = document.querySelectorAll('.task-card');
            
            taskCards.forEach(card => {
                card.setAttribute('draggable', true);
                
                card.addEventListener('dragstart', (e) => {
                    e.dataTransfer.setData('text/plain', card.dataset.taskId);
                    card.classList.add('opacity-50');
                });
                
                card.addEventListener('dragend', () => {
                    card.classList.remove('opacity-50');
                });
            });
            
            // Column drop zones
            const columns = document.querySelectorAll('.kanban-column');
            
            columns.forEach(column => {
                column.addEventListener('dragover', (e) => {
                    e.preventDefault();
                    column.classList.add('bg-gray-100');
                });
                
                column.addEventListener('dragleave', () => {
                    column.classList.remove('bg-gray-100');
                });
                
                column.addEventListener('drop', (e) => {
                    e.preventDefault();
                    column.classList.remove('bg-gray-100');
                    
                    const taskId = e.dataTransfer.getData('text/plain');
                    const newStatus = column.dataset.status;
                    
                    // Call Livewire method to update task status
                    if (taskId && newStatus) {
                        @this.updateTaskStatus(taskId, newStatus);
                    }
                });
            });
        });
    </script>
    @endscript
</div>