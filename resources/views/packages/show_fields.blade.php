<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $package->name !!}</p>
</div>

<!-- Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc', 'Desc:') !!}
    <p>{!! $package->desc !!}</p>
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category:') !!}
    <p>{!! $package->category->name !!}</p>
</div>

<!-- Parlor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parlor_id', 'Parlor:') !!}
    <p>{!! $package->parlor->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $package->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $package->updated_at !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <img src="{!! Storage::url($package->image) !!}" alt="{!! $package->name !!}">
</div>
