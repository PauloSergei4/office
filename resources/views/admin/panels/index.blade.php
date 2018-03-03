@extends('admin.layout')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Добавить панель</h4>
                        <p class="category">Здесь можно совершать действия над панелями</p>
                        <br>
                    <a href="{{route('panels.create')}}" class="btn btn-info btn-fill btn-wd">Добавить</a>
                        <br>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <th>№п/п</th>
                                <th>Номер панели</th>
                                <th>Топик</th>
                                {{--  <th>Пользователь</th>  --}}
                                <th>Действия</th>
                            </thead>
                            <tbody>
                                @foreach($panels as $panel)

                                <tr>
                                    <td>{{$panel->id}}</td>
                                    <td>{{$panel->num_panel}}</td>
                                    <td>{{$panel->topic}}</td>
                                    {{--  <td>{{$panel->user_id}}</td>  --}}
                                    <td><a href="{{route('panels.edit', $panel->id)}}" class="fa fa-pencil"></a> 
                                        {{Form::open(['route'=>['panels.destroy', $panel->id], 'method'=>'delete'])}}
                                        <button onclick="return confirm('Стопудов подумал?')" type="submit" class="delete">
                                         <i class="fa fa-remove"></i>
                                        </button>
                                         {{Form::close()}}</td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection