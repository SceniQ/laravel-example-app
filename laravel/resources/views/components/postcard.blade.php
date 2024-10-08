@props(['post','full'=> false])
<div class="card">
    {{-- Title --}}
    <h1 class="font-bold text-xl"> {{$post->title}}</h1>
    {{-- Author & Date --}}
    <div class="text-xs font-light mb-4">
        <span>Posted {{$post->created_at->diffForHumans()}} by</span>
        <a href="{{route('posts.user', $post->user)}}" class="text-blue-500 font-medium">{{$post->user->username}}</a>
    </div>
    
    <div class="h-64 rounded-md mb-4 w-full object-cover overflow-hidden">
        @if ($post->image_path)
            <img src="{{asset('storage/'.$post->image_path)}}" alt="post_img">
        @else
        <img src="{{asset('storage/post_images/gallery.png')}}" alt="post_img">
        @endif
    </div>


    {{-- Body --}}
    @if ($full)
    <div class="text-sm">
        <p>{{ $post->body}}</p>
    </div>
    @else
    <div class="text-sm">
        <span>{{ Str::words($post->body,15)}}</span>
        <a href="{{route('posts.show',$post)}}" class="text-blue-500 ml-2">Read more &Rarr;</a>
        <div>
            {{$slot}}
        </div>
    </div>
    @endif
</div>