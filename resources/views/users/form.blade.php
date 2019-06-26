<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    
    @if($errors->has('name'))
    <span class="help-block">{{ $errors->first('name') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::label('email') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    
    @if($errors->has('email'))
    <span class="help-block">{{ $errors->first('email') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    {!! Form::label('password') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
    
    @if($errors->has('password'))
    <span class="help-block">{{ $errors->first('password') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('position_id') ? 'has-error' : '' }}">
    {!! Form::label('Assign Position') !!}
    {!! Form::select('position_id', App\Position::pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose Position']) !!}
    
    @if($errors->has('position_id'))
    <span class="help-block">{{ $errors->first('position_id') }}</span>
    @endif
</div>

<button class="btn btn-primary">{{ $user->exists ? 'Update' : 'Save' }}</button>
<a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>