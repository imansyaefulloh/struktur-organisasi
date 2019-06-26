<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    
    @if($errors->has('name'))
    <span class="help-block">{{ $errors->first('name') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
    {!! Form::label('Parent Position') !!}
    {!! Form::select('parent_id', App\Position::pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose Parent']) !!}
    
    @if($errors->has('parent_id'))
    <span class="help-block">{{ $errors->first('parent_id') }}</span>
    @endif
</div>

<button class="btn btn-primary">{{ $position->exists ? 'Update' : 'Save' }}</button>
<a href="{{ route('positions.index') }}" class="btn btn-default">Cancel</a>