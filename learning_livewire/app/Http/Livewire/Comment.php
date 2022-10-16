<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Comment extends Component
{
    use WithPagination;

    public $newComment;
    public $image;

    protected $listeners = ['imageUpload' => 'handleImageUpload'];

    public function handleImageUpload($imageData)
    {
        $this->image = $imageData;
    }

    public function render()
    {
        $comments = \App\Comment::orderBy('updated_at', 'DESC')->paginate(3);
        return view('livewire.comment', compact('comments'));
    }



    public function addComment()
    {
        if ($this->newComment == '') {
            return;
        }

        $this->validate([
            "newComment" => 'required|max:255'
        ]);

        $createdComment = \App\Comment::create([
            "body" => $this->newComment,
            "user_id" => rand(1, 2)
        ]);
        session()->flash('message', 'Comment added Successfully');
    }

    public function remove($id)
    {
        $comment = \App\Comment::find($id);
        $comment->delete();
    }
}
