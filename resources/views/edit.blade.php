@extends('todo-layout')
 @section('form')
     <div class="card">
         <div class="card-body">
             <h4 class="card-title">$title</h4>
             <form action="{{route('todo.update')}}" method="post">
                 <div class="form-group">
                     <input type="text" class="form-control" name="work_name" value="{{$work->work_name}}" >
                 </div>
                 @csrf
                 <input type="hidden" class="form-control" name="work_status" value="value="{{$work->work_status}}"">
                 <input type="hidden" class="form-control" name="id" value="{{$work->id}}">
                 <button type="submit" name="btnWork" class="btn btn-primary">Сохранить изменения</button>
             </form>
         </div>
     </div>

 @endsection
@section('list')
    <a href="{{route('todo.index')}}" class="btn  btn-outline-primary btn-sm"> Вернутся к списку задач</a>
@endsection
