<div class="container p-4">
    <div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <form action="" wire:submit.prevent="addComment">
            <div class="row">
                <div class="col-lg-10">
                   @if ($image)
                       <img src="{{$image}}" width="200" alt="">
                   @endif
                    <input type="file" name="image" id="image" class="form-control" wire:change="$emit('imageeChosen')">
                    @error('newComment')
                    <span class="error">{{$message}}</span>
                    @enderror
                    <input type="text" name="newComment" id="body" placeholder="What's on your mind"
                        class="form-control" wire:model.lazy="newComment">
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-primary" type="submit">Post</button>
                </div>
            </div>
        </form>
    </div>

    <div class="row p-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Comments</h3>
                    <h3>Total : </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($comments as $comment)
                        <li class="list-group-item">
                            <div class="row d-flex justify-content-between">
                                <div>
                                    <div><b>{{$comment->user['name']}}</b></div>
                                    <div class="px-2"><i>{{$comment->updated_at->diffForHumans()}}</i></div>
                                </div>
                                <button class="btn btn-danger" wire:click="remove({{$comment->id}})">Delete</button>
                            </div>
                            <div class="row p-2">
                                {{$comment->body}}
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{$comments->links()}}
</div>

<script>
    window.livewire.on('imageeChosen', () => {
let inputImage = document.getElementById('image');
let image = inputImage.files[0];
let reader = new FileReader();
reader.onloadend = () => {
    window.livewire.emit('imageUpload',reader.result)
}
reader.readAsDataURL(image)
})
</script>