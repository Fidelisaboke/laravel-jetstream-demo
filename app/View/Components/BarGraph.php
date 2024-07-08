<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;
use App\Models\Task;

class BarGraph extends Component
{
    public $usersCount;
    public $tasksCount;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->usersCount = User::count();
        $this->tasksCount = Task::count();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bar-graph');
    }
}
