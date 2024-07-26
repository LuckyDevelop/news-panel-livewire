<?php

namespace App\Livewire\News;

use App\Models\News;
use Livewire\Component;

class NewsAdd extends Component
{
    public $title;
    public $content;
    public $author;
    public $published_at;

    public function render()
    {
        return view('livewire.news.news-add');
    }

    public function create()
    {
        News::insert([
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author,
            'published_at' => $this->published_at,
        ]);

        $this->title = null;
        $this->content = null;
        $this->author = null;
        $this->published_at = null;

        return redirect()->to('/news');
    }

    public function back()
    {
        return redirect()->to('/news');
    }
}
