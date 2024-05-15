<!-- cancel, old image value with add and edit -->
@if(isset($post))
<form action="{{ route('updatePost', ['id'=>$post->id]) }}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
    @method('put')
@else
<form action="{{ route('storePost') }}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
@endif
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input name="title" value="{{ isset($post) ? $post->title : old('title') }}" type="text" id="title" required="required" class="form-control ">
        </div>
        @error('title')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <textarea id="content" name="content" required="required" class="form-control">{{ isset($post) ? $post->content : old('content') }}</textarea>
        </div>
        @error('content')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
        <div class="checkbox">
            <label>
                <input name="active" type="checkbox" class="flat" {{ (isset($post) && $post->active) || old('active') ? 'checked' : '' }}>
            </label>
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <a href="{{ route('posts') }}" class="btn btn-primary">Cancel</a>
            <button type="submit" class="btn btn-success">{{ isset($post) ? 'Update' : 'Add' }}</button>
        </div>
    </div>

</form>