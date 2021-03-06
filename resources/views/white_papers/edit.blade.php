@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            White Paper
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($whitePaper, ['route' => ['whitePapers.update', $whitePaper->id], 'method' => 'patch']) !!}

                        @include('white_papers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection