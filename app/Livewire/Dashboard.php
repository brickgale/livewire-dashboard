<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Dashboard extends Component
{
    public $totalUsers = 0;
    public $recentActivity = 0;
    public $pendingTasks = 0;

    public function mount()
    {
        $this->totalUsers = User::count();
        // You can add more dynamic data here
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
} 