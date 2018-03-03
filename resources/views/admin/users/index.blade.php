@extends('admin.layout')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Добавить пользователя</h4>
                        <p class="category">Здесь можно совершать действия над пользователями</p>
                        <br>
                    <a href="{{route('users.create')}}" class="btn btn-info btn-fill btn-wd">Добавить</a>
                        <br>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <th>Номер</th>
                                <th>Имя пользователя</th>
                                <th>ФИО</th>
                                <th>email</th>
                                <th>Панель</th>
                                <th>Действия</th>
                            </thead>
                            <tbody>
                                @foreach($users as $user)

                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->fio}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->panel}}</td>
                                    <td><a href="{{route('users.edit', $user->id)}}" class="fa fa-pencil"></a>
                                      {{--{{Form::checkbox('name', 'value');}}--}}

                                        {{--{{Form::close()}}--}}
                                        {{Form::open(['route'=>['users.destroy', $user->id], 'method'=>'delete'])}}
                                        <button onclick="return confirm('are you sure?')" type="submit" class="close"> <i class="fa fa-remove"></i>
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