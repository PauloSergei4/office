@extends('admin.layout')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                    @include('admin.errors')
                <div class="card">
                    <div class="header">
                        <h4 class="title">Изменение панели</h4>
                    </div>
                    <div class="content">
                        {{Form::open(['route' => ['panels.update', $panel->id],
                        'method' => 'put'
        ]) }}
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Номер панели</label>
                                        <input type="text" name="num_panel" class="form-control border-input" placeholder="Номер панели" value="{{$panel->num_panel}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Топик</label>
                                        <input type="text" name="topic" class="form-control border-input" placeholder="Топик" value="{{$panel->topic}}">
                                    </div>
                                </div>
                            </div>

                            {{--  <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Пользователь</label>
                                        <input type="text" name="user_id" class="form-control border-input" placeholder="№ пользователя" value="{{$panel->user_id}}">
                                    </div>
                                </div>
                            </div>  --}}
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Изменить панель</button>
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