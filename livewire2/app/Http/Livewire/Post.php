<?php

namespace App\Http\Livewire;
// use Illuminate\View\Component;
use Livewire\Component;
use App\Models\Post as Posts;


class Post extends Component
{
    public $isModelOpen = false;

    public function render()
    {
        $posts = Posts::latest()->paginate(5);
        return view('livewire.post', [
            'posts' => $posts
        ]);
    }

    public function create(){
        $this->isOpen();
    }

    public function isOpen(){
        $this->isModelOpen = true;
    }

    public function isClose(){
        $this->isModelClose = false;
    }

    public function isReset(){
        $this->title = '';
        $this->body = '';
        $this->author = '';
    }

    //======= store
    public function store()
    {
        $this->validate([
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
        ]);
    
        Posts::updateOrCreate(['id' => $this->posts_id], [
            'title' => $this->title,
            'body' => $this->body,
            'author' => $this->author,
        ]);
        session()->flash('message', 'success');
        $this->isClose();
        $this->isReset();
    }
}
