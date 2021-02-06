<?php

namespace App\Http\Livewire;

use App\Models\Formation;
use App\Models\User;
use App\Models\UserFormation;
use Livewire\Component;

class FormationsValidate extends Component
{
    public $users;

    public $currentUser;

    public function mount()
    {
        $this->currentUser = null;

    }

    public function render()
    {
        $this->getUsers();

        return view('livewire.formations-validate',['formations'=>$this->getFormations()]);
    }

    private function getUsers()
    {
        $this->users = User::all();
    }

    private function getFormations()
    {
        if ($this->currentUser !== null) {
            if (count(UserFormation::where('user_id', $this->currentUser)->get()) > 0 ){
                return UserFormation::where('user_id', $this->currentUser)->get();
            }
        }
        return null;
    }
}
