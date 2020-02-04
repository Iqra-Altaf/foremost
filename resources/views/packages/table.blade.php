<div class="table-responsive">
    <table class="table" id="packages-table">
        <thead>
            <tr>
                <th>Name</th>
		        <th>Desc</th>
		        <th>Category</th>
		        <th>Parlor</th>
		        <th>Likes</th>
		        <th>Popular</th>
		        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($packages as $package)
            <tr>
                <td>{!! $package->name !!}</td>
	            <td>{!! $package->desc !!}</td>
	            <td>{!! $package->category->name !!}</td>
	            <td>{!! $package->parlor->name !!}</td>
	            <td>{!! $package->popularity !!}</td>
				<td>@if($package->is_popular) Yes @else No @endif</td>
	            <td><img src="{!! Storage::url($package->image) !!}" alt="{!! $package->name !!}" height="100px" width="200px"></td>
                <td>
                    {!! Form::open(['route' => ['packages.destroy', $package->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
						{{--
                        <a href="{!! route('packages.show', [$package->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
						--}}
						<a href="{!! route('packages.edit', [$package->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
						{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
