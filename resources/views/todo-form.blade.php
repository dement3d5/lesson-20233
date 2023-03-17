<div class="card">
    <div class="card-body">
        <h4 class="card-title">Добавить задачу</h4>
        <form action="{{route('todo.store')}}" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="work_name" >
            </div>
            @csrf

            <input type="hidden" class="form-control" name="work_status" value="0">
            <button type="submit" name="btnWork" class="btn btn-primary">Добавить</button>
        </form>
    </div>
</div>
