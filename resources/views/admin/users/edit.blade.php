@extends('admin.layout')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                    @include('admin.errors')
                <div class="card">
                    <div class="header">
                        <h4 class="title">Изменение профиля</h4>
                    </div>
                    <div class="content">
                            {{Form::open(['route' => ['users.update', $user->id],
                                            'method' => 'put'
                            ]) }}
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                    <input type="text" name="name" class="form-control border-input" placeholder="Username" value="{{$user->name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="text" name="email" class="form-control border-input" placeholder="Email" value="{{$user->email}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control border-input" placeholder="Password" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>ФИО</label>
                                        <input type="text" name="fio" class="form-control border-input" placeholder="FIO" value="{{$user->fio}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Номер панели</label>
                                        {{--  {{Form::select('num_panel[]', 
                                        $panels, 
                                        null, 
                                        ['class'=>"form-control select2", 'multiple'=> 'multiple'])
                                        }}  --}}
                                        <input type="text" name="panel" class="form-control border-input" placeholder="Panel" value="{{$user->panel}}">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Изменить профиль</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                        {{Form::close()}}
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

</div>

@endsection