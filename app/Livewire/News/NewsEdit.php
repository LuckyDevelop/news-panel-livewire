<?php

namespace App\Livewire\News;

use App\Models\News;
use Carbon\Carbon;
use Livewire\Component;

class NewsEdit extends Component
{
    public $id;
    public $news;
    public $title;
    public $content;
    public $author;
    public $published_at;

    public function mount($id)
    {
        $this->news = News::find($id);
        $this->title = $this->news->title;
        $this->content = $this->news->content;
        $this->author = $this->news->author;
        $this->published_at = Carbon::parse($this->news->published_at)->format('Y-m-d');
    }

    public function render()
    {
        $data['news'] = $this->news;
        return view('livewire.news.news-edit', $data);
    }

    public function edit()
    {
        $news = $this->news;
        $news->update([
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author,
            'published_at' => $this->published_at,
        ]);

        return $this->redirectRoute('news');
    }

    public function back()
    {
        return redirect()->to('/news');
    }
}
