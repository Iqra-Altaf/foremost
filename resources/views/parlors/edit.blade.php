@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Parlor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
				   {!! Form::model($parlor, ['route' => ['parlors.update', $parlor->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('parlors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
