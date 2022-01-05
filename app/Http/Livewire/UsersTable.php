<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '5']
    ];

    public $search = '';
    public $perPage = 5;

    public function render()
    {
        if ($this->search != '') {
            $users = User::where('name', 'LIKE', "%{$this->search}%")
                ->orWhere('email', 'LIKE', "%{$this->search}%")
                ->paginate($this->perPage);
        } else {
            $users = User::paginate($this->perPage);
        }
        return view('livewire.users-table', compact('users'));
    }
}
