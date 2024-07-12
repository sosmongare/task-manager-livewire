{{-- <div class="container mt-4">
    <form wire:submit.prevent="addTask" class="mb-4">
        <div class="form-group">
            <label for="taskTitle">Task Title</label>
            <input type="text" id="taskTitle" class="form-control" wire:model="title" placeholder="Task Title">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="taskDescription">Task Description</label>
            <textarea id="taskDescription" class="form-control" wire:model="description" placeholder="Task Description"></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add Task</button>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Task Title</th>
                <th>Created at</th>
                <th>Completed</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->created_at }}</td>
                    <td>
                        <input type="checkbox" wire:change="toggleCompletion({{ $task->id }})" {{ $task->is_completed ? 'checked' : '' }}>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}
<div class="container mt-4">
    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addTaskModal">
        Add Task
    </button>

    <!-- The Modal -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTaskModalLabel">Add Task</h5>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="addTask">
                        <div class="form-group">
                            <label for="taskTitle">Task Title</label>
                            <input type="text" id="taskTitle" class="form-control" wire:model="title" placeholder="Task Title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="taskDescription">Task Description</label>
                            <textarea id="taskDescription" class="form-control" wire:model="description" placeholder="Task Description"></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Add Task</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Task Title</th>
                <th>Created at</th>
                <th>Completed</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->created_at }}</td>
                    <td>
                        <input type="checkbox" wire:change="toggleCompletion({{ $task->id }})" {{ $task->is_completed ? 'checked' : '' }}>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $tasks->links() }}
</div>
