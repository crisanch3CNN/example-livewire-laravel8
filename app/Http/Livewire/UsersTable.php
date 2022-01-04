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
        if ($this->search != '') {
            $users = User::where('name', 'Like', '%' . $this->search . '%')->paginate(5);
        } else {
            $users = User::paginate(5);
        }

        return view('livewire.users-table', compact('users'));
    }
}
