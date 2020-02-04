<!-- Name Field -->
<div class="form-group col-sm-4">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $user->name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group col-sm-4">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Type Field -->
<div class="form-group col-sm-4">
    {!! Form::label('type', 'Type:') !!}
    <p>{!! \App\User::$types[$user->type] !!}</p>
</div>
