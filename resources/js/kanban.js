import Sortable from 'sortablejs';

document.addEventListener('DOMContentLoaded', function() {
    // Initialize SortableJS for each column
    const columns = document.querySelectorAll('.kanban-column > div:last-child');
    
    columns.forEach(column => {
        new Sortable(column, {
            group: 'kanban',
            animation: 150,
            ghostClass: 'bg-gray-100',
            onEnd: function(evt) {
                const taskId = evt.item.dataset.taskId;
                const newStatus = evt.to.parentElement.dataset.status;
                
                // Send to Livewire
                window.Livewire.dispatch('task-moved', {
                    taskId: taskId,
                    newStatus: newStatus,
                    newOrder: evt.newIndex
                });
            }
        });
    });
});