<?php

namespace App\Livewire\News;

use App\Models\News as ModelsNews;
use Livewire\Component;


class News extends Component
{
    public function render()
    {
        $data['news'] = ModelsNews::get();
        return view('livewire.news.news', $data);
    }

    public function addView()
    {
        return redirect()->to('/news/add');
    }

    public function editView($id)
    {
        return $this->redirectRoute('news.edit', ['id' => $id]);
    }

    public function delete($id)
    {
        ModelsNews::find($id)->delete();
    }
}
