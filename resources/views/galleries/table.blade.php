<div class="table-responsive">
    <table class="table" id="galleries-table">
        <thead>
            <tr>
                <th>Name</th>
		        <th>Desc</th>
		        <th>Category</th>
		        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($galleries as $gallery)
            <tr>
                <td>{!! $gallery->name !!}</td>
		        <td>{!! $gallery->desc !!}</td>
		        <td>{!! $gallery->category->name !!}</td>
	            <td><img src="{!! Storage::url($gallery->image) !!}" alt="{!! $gallery->name !!}" height="100px" width="200px"></td>
                <td>
                    {!! Form::open(['route' => ['galleries.destroy', $gallery->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
						{{--
						<a href="{!! route('galleries.show', [$gallery->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
						--}}
						<a href="{!! route('galleries.edit', [$gallery->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
