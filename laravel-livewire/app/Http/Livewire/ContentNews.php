<?php

namespace App\Http\Livewire;


use App\Models\News;
use Livewire\Component;

class ContentNews extends Component
{
    public $count = 4;

    public function render()
    {
        $news = News::take($this->count)->get();
        $total_news = News::count();
        return view('livewire.content-news', [
            'news' => $news,
            'total_news' => $total_news
        ]);
    }

    public function loadmore()
    {
        $this->count += 4;
        sleep(1);
    }
}