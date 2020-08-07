@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Doc
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($doc, ['route' => ['docs.update', $doc->id], 'method' => 'patch']) !!}

                        @include('docs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection