<?php

namespace App\Filament\Widgets;

use App\Models\Task;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Form;
use Filament\Widgets\Widget;
use Illuminate\Support\Str;

class KanbanBoard extends Widget
{
    protected static string $view = 'filament.widgets.kanban-board';

    protected int | string | array $columnSpan = 'full';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('description')
                    ->columnSpanFull(),
                Select::make('status')
                    ->options([
                        'todo' => 'To Do',
                        'in_progress' => 'In Progress',
                        'review' => 'Review',
                        'done' => 'Done',
                    ])
                    ->default('todo'),
                Select::make('priority')
                    ->options([
                        1 => 'Low',
                        2 => 'Medium',
                        3 => 'High',
                        4 => 'Urgent',
                    ])
                    ->default(2),
                DatePicker::make('due_date'),
                TagsInput::make('labels'),
            ])
            ->statePath('data');
    }

    public function getTasksByStatus(string $status): \Illuminate\Database\Eloquent\Collection
    {
        return Task::where('status', $status)
            ->orderBy('sort_order')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function updateTaskStatus($taskId, $newStatus): void
    {
        $task = Task::find($taskId);
        if ($task) {
            $task->status = $newStatus;
            $task->save();
            
            $this->dispatch('task-updated');
        }
    }

    public function createTask(): void
    {
        $data = $this->form->getState();
        
        Task::create([
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'status' => $data['status'],
            'priority' => $data['priority'],
            'due_date' => $data['due_date'] ?? null,
            'labels' => $data['labels'] ?? [],
        ]);
        
        $this->form->fill();
        $this->dispatch('task-created');
    }

    protected function getViewData(): array
    {
        return [
            'todoTasks' => $this->getTasksByStatus('todo'),
            'inProgressTasks' => $this->getTasksByStatus('in_progress'),
            'reviewTasks' => $this->getTasksByStatus('review'),
            'doneTasks' => $this->getTasksByStatus('done'),
        ];
    }
}