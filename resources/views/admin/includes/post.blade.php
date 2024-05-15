<h2>Full Name: {{ $post->title }}</h2>
<br>
<h2>Active: {{ $post->active ? 'Yes' : 'No' }}</h2>
<br>
<h2>Post Content:</h2>
<p>{{ $post->content }}</p>