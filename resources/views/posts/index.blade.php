        <h1>All Posts</h1>

<div class="post_container">
    @foreach ( $posts as $post )
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">{{ $post['title'] }}</h3>
                <p class="card-text">{{ $post['content'] }}</p>
                <small class="text-muted">Post ID: {{ $post['id'] }}</small>
            </div>
        </div>

        @if (empty($posts))
                <p>No posts available.</p>
        @endif

    @endforeach
</div>
