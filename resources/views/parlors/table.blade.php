<div class="table-responsive">
    <table class="table" id="parlors-table">
        <thead>
            <tr>
                <th>Name</th>
		        <th>Desc</th>
		        <th>Popular</th>
		        <th>Link</th>
		        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($parlors as $parlor)
            <tr>
                <td>{!! $parlor->name !!}</td>
	            <td>{!! $parlor->desc !!}</td>
            	<td>@if($parlor->is_popular) Yes @else No @endif</td>
				<td><a href="@if(isset($parlor->link)) {!! $parlor->link !!} @else # @endif" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a></td>
				<td><img src="{!! Storage::url($parlor->image) !!}" alt="{!! $parlor->name !!}" height="100px" width="200px"></td>
                <td>
                    {!! Form::open(['route' => ['parlors.destroy', $parlor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
						{{--
						<a href="{!! route('parlors.show', [$parlor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
						--}}
						<a href="{!! route('parlors.edit', [$parlor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
