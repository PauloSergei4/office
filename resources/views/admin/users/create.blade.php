@extends('admin.layout')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                    @include('admin.errors')
                <div class="card">
                    <div class="header">
                        <h4 class="title">Добавление профиля</h4>
                    </div>
                    <div class="content">
                            {{Form::open(['route' => ['users.store']]) }}
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                    <input type="text" name="name" class="form-control border-input" placeholder="Username" value="{{old('name')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="text" name="email" class="form-control border-input" placeholder="Email" value="{{old('email')}}">
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
                                        <input type="text" name="fio" class="form-control border-input" placeholder="FIO" value="{{old('fio')}}">
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
                                        ['class'=>"form-control select2", 'multiple'=> 'multiple', 'placeholder' => 'Номер панели']
                                        )
                                        }}  --}}
                                        <input type="text" name="panel" class="form-control border-input" placeholder="Panel">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Добавить пользователя</button>
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