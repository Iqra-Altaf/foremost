<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $parlor->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $parlor->name !!}</p>
</div>

<!-- Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc', 'Desc:') !!}
    <p>{!! $parlor->desc !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $parlor->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $parlor->updated_at !!}</p>
</div>

<!-- Image Field -->
<div class="row">
	<div class="form-group col-sm-12">
	    {!! Form::label('image', 'Image:') !!}
	    <img src="{!! Storage::url($parlor->image) !!}" alt="{!! $parlor->name !!}">
	</div>
</div>
