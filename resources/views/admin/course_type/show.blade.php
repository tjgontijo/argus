@extends('adminlte::page')

@section('title', 'Tipo de Curso')

@section('content_header')

<section class="content-header">
    <h1>Detalhes</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('course_type.index')}}">Tipo de Curso</a></li>
        <li class="active">Descrição</li>
    </ol>
</section>
@stop 
@section('content') 
<section class="content">   
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>    
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>              
        </div>
        <div class="box-body">
           <p><b>Nome</b></p>
           <p>{{$course_type->name}}</p>           
           <p><b>Descrição:</b></p>
           <p>{{$course_type->description}}</p>
           <p><b>Executor:</b></p>
           <p>{{$course_type->type}}</p>
       </div>         
       <div class="box-footer">    
        <input type="button" class="btn btn-warning" value="Voltar" onclick="history.back()" class="btn btn-primary"></input>  
        @can('course_type-delete')         
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm" >Excluir</button>
        @endcan
        {!! Form::close() !!}
    </div>        
</div>
</section>
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Confirmação de Exclusão</h3>
            </div>
            <div class="modal-body text-center">
                <p>Deseja realmente deletar este <b>Tipo de Curso</b>?</p>
                <p>Esta ação não poderá ser desfeita.</p>
            </div>
            <div class="modal-footer">
                {!! Form::open(['route' => ['course_type.destroy' ,$course_type->id], 'method' => 'DELETE']) !!} 
                <input type="submit" value="Deletar" class="btn btn-danger"></input>                  
                <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
            </div>
        </div>
    </div>
</div>
@stop