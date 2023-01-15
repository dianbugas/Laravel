<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Articles;

class Contents extends Component
{
    public $count = 4;

    public function render()
    {
        $articles = Articles::take($this->count)->get();
        $total_articles = Articles::count();
        return view('livewire.contents', [
            'articles' => $articles,
            'total_articles' => $total_articles
        ]);
    }

    public function loadmore()
    {
        $this->count += 4;
        sleep(1);
    }
}