<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class BlogComment extends Component
{

    use WithPagination;

public $blog;
public $name;
public $comment;

public function mount(Blog $blog)
{
    $this->blog = $blog;
}

public function submitComment()
{
    $this->validate([
        'name' => 'required|string',
        'comment' => 'required|string',
    ]);

    Comment::create([
        'name' => $this->name,
        'comment' => $this->comment,
        'blog_id' => $this->blog->id,
    ]);

   
}


// #[Computed()]

//     public function comments()
//     {
//         return $this->blog?->comments()->latest()->paginate(5);
//     }
    public function render()
    {
        return view('livewire.blog-comment',

        [
            'comments' => Comment::where('blog_id', $this->blog->id)->latest()->paginate(5),
        ]);
    }
}
