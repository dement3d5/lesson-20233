@extends('todo-layout')
 @section('form')
    @include('todo-form')
@endsection
@section('list')
            <div class="card mt-4">
                <div class="card-body">
                    <h4 class="card-title">Work List</h4>
                    <p class="card-text">Список важных дел</p>
                </div>
                <ul class="list-group list-group-flush">


                    @foreach( $worklist as $work)
                        <li class="list-group-item
                            @if ($work->work_status == 1)
                            list-group-item-success @endif">
                            {{$work->work_name}}
                            <a href="{{ route('todo.change-status',$work->id)}}"class="btn btn-outline-success btn-sm ml-5">
                                <span><i class="fas fa-check-circle "></i></span>
                            </a>
                            <a href="{{ route('todo.edit',$work->id)}}" class="btn  btn-outline-primary btn-sm">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="{{ route('todo.delete',$work->id)}}" class="btn btn-outline-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </li></li>
                    @endforeach


                </ul>
            </div>
@endsection
