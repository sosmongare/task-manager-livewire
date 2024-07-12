<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class TaskManager extends Component
// {
//     use WithPagination;
//     public $tasks;
//     public $title;
//     public $description;

//     // public function mount()
//     // {
//     //     $this->tasks = Task::orderBy('created_at', 'desc')->get();
//     // }

//     public function addTask()
//     {
//         $this->validate([
//             'title' => 'required',
//             'description' => 'nullable',
//         ]);

//         Task::create([
//             'title' => $this->title,
//             'description' => $this->description,
//         ]);

//         $this->resetInputFields();
//         $this->tasks = Task::orderBy('created_at', 'desc')->get();
//               // Close the modal
//               $this->dispatch('close-modal');
//     }

//     public function markAsCompleted($taskId)
//     {
//         $task = Task::find($taskId);
//         $task->is_completed = true;
//         $task->save();

//         $this->tasks = Task::orderBy('created_at', 'desc')->get();
//     }

//     private function resetInputFields()
//     {
//         $this->title = '';
//         $this->description = '';
//     }
//     public function toggleCompletion($taskId)
//     {
//         $task = Task::find($taskId);
//         $task->is_completed = !$task->is_completed;
//         $task->save();

//         $this->tasks = Task::orderBy('created_at', 'desc')->get();
//     }


//     public function render()
//     {
//         $tasks = Task::orderBy('created_at', 'desc')->paginate(5);
//         // return view('livewire.task-manager');
//         return view('livewire.task-manager', ['tasks' => $tasks]);
//     }

// }
{
    use WithPagination;

    public $title;
    public $description;

    protected $paginationTheme = 'bootstrap'; // Optional: Use Bootstrap pagination theme

    public function addTask()
    {
    $this->validate([
        'title' => 'required',
        'description' => 'nullable',
    ]);

    Task::create([
        'title' => $this->title,
        'description' => $this->description,
    ]);

    $this->resetInputFields();
    $this->dispatchBrowserEvent('close-modal');
}

public function markAsCompleted($taskId)
{
    $task = Task::find($taskId);
    $task->is_completed = true;
    $task->save();
}

private function resetInputFields()
{
    $this->title = '';
    $this->description = '';
}

public function toggleCompletion($taskId)
{
    $task = Task::find($taskId);
    $task->is_completed = !$task->is_completed;
    $task->save();
}

public function render()
{
    $tasks = Task::orderBy('created_at', 'desc')->paginate(5);
    return view('livewire.task-manager', ['tasks' => $tasks]);
}
}