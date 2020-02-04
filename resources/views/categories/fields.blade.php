<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('desc', 'Description:') !!}
    {!! Form::text('desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
	<select class="form-control" name="type">
		@foreach(\App\Category::$names as $key => $name)
		<option value="{{ $key }}" @if(isset($category) && $key == $category->type) selected @endif>{{ $name }}</option>
		@endforeach
	</select>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    <input type="file" name="image" accept="image/*" class="form-control">
</div>

<div class="form-group col-sm-6">
    {!! Form::label('is_popular', 'Popular:') !!}
	<input type="checkbox" name="is_popular" @if(isset($category) && $category->is_popular) checked @endif>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary pull-right']) !!}
    <a href="{!! route('categories.index') !!}" class="btn btn-default">Cancel</a>
</div>
