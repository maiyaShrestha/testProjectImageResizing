<h1>Image Upload</h1>
{!! Form::open(array('url' => '/upload','files' => true)) !!}


<div class="form-group">
    {!! Form::label('avatar', 'Avatar',array('class' => 'sr-only')) !!}
    {!! Form::file('avatar') !!}
</div>


{!! Form::submit('Upload') !!}

{!! Form::close() !!}