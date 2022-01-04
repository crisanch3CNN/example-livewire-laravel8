<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $users = User::where('name', $this->search)->paginate(5);
        // $users = User::paginate(5);

        return view('livewire.users-table', compact('users'));
    }
}
