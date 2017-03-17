<!DOCTYPE html>
<html>
    <head>
        <title>ToDo List</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h1>ToDo List</h1>
                <ul>
                    @foreach($todo as $td)
                    
                    <li>{{ $td->item }} 
                        <form action="{{ url('todo/'.$td->id_todo) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                        </form>
                    </li>
                    @endforeach
                </ul>
                <form action="todo" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                            <input type="text" class="form-control" name="todo_item" placeholder="Item baru...">
  </div>
                        </div>
                        <div class="col-lg-1">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </div>
            </form>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                </div>
            </div>
        </div>
    </body>
</html>