<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Auth;

class RequestsUser extends Component
{

    public $authId;
    public $listRequests;

    public function mount()
    {
        $this->authId = Auth::id();

        $this->listRequests = DB::table('users')
        ->join('requests', function($join)
        {
            $join->on('users.id', '=', 'requests.sent_from')->where('requests.sent_to', '=', $this->authId);
        })
        ->select('id' , 'name', 'username', 'profile_photo_path')->get();

        return $this->listRequests;

    }

    public function render()
    {
        return view('livewire.requests-user');
    }


}



