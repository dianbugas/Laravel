<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use Livewire\Component;

class Todolists extends Component
{
    public $body;
    public $activity;
    public $count_activity;

    public function render()
    {
        $this->activity = Activity::orderBy('position', 'asc')->get();
        $this->count_activity = Activity::count();
        return view('livewire.todolists');
    }

    public function submit()
    {
        $this->validate([
            'body' => 'required',
        ]);

        Activity::create([
            'position' => $this->count_activity + 1,
            'body' => $this->body
        ]);

        $this->body = NULL;
    }

    // delete
    public function delete($id)
    {
        $activity = Activity::find($id);
        $activity->delete();
    }

    public function updateTaskOrder($activity)
    {
        foreach ($activity as $item) {
            Activity::where('id', $item['value'])->update(['position' => $item['order']]);
        }
    }
}