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
                            {{Form::open(['route' => ['panels.store']]) }}
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Номер панели</label>
                                        <input type="text" name="num_panel" class="form-control border-input" placeholder="Номер панели" value="{{old('num_panel')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Топик</label>
                                        <input type="text" name="topic" class="form-control border-input" placeholder="Топик" value="{{old('topic')}}">
                                    </div>
                                </div>
                            </div>

                            {{--  <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Пользователь</label>

                                        {{Form::select('user_id[]', 
                                        $users, 
                                        null, 
                                        ['class'=>"form-control select2", 'multiple'=> 'multiple' ])
                                        }}
                                          <input type="text" name="user_id" class="form-control border-input" placeholder="№ пользователя">  
                                    </div>
                                </div>
                                {{Form::close()}} 
                            </div>--}}
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Добавить панель</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                       
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

</div>

@endsection