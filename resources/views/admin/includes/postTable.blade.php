<div class="row">
    <div class="col-sm-12">
    <div class="postd-box table-responsive">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Active</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->active ? 'Yes' : 'No' }}</td>
                    <td><a href="{{ route('showPost', ['id'=>$post->id]) }}"><img src="{{ asset('assets/admin/images/show.png') }}" alt="Show" style="width: 32px; height: 32px;"></a></td>
                    <td><a href="{{ route('editPost', ['id'=>$post->id]) }}"><img src="{{ asset('assets/admin/images/edit.png') }}" alt="Edit"></a></td>
                    <td><a onclick="return confirm('Are you sure?')" href="{{ route('deletePost', ['id'=>$post->id]) }}"><img src="{{ asset('assets/admin/images/delete.png') }}" alt="Delete"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>