<!-- cancel, pass old val -->
@if(isset($user))
<form action="{{ route('updateUser', ['id'=>$user->id]) }}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    @method('put')
@else
<form action="{{ route('storeUser') }}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
@endif
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input name="name" value="{{ isset($user) ? $user->name : old('name') }}" type="text" id="first-name" required="required" class="form-control ">
        </div>
        @error('name')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Email <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input name="email" value="{{ isset($user) ? $user->email : old('email') }}" id="email" class="form-control" type="email" name="email" required="required">
        </div>
        @error('email')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <!-- password field isn't required -->
            <!-- <input name="password" type="password" id="password" {{ isset($user) ? '' : 'required="required"' }} class="form-control"> -->
            <input name="password" value="{{ isset($user) ? $user->password : old('password') }}" type="password" id="password" required="required" class="form-control">
            <input name="oldPassword" value="{{ isset($user) ? $user->password : '' }}" type="hidden">
        </div>
        @error('password')
            {{ $message }}
        @enderror
    </div>
    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <a href="{{ route('users') }}"><button class="btn btn-primary" type="button">Cancel</button></a>
            <button type="submit" class="btn btn-success">{{ isset($user) ? "Update" : "Add" }}</button>
        </div>
    </div>

</form>