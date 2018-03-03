@extends('admin.layout')

@section('content')
<div class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                @include('admin.errors')
                @include('admin.notifications')

                    <hr>
                    
                    <div class="card">
                        <div class="header">

                            <h4 class="title">Отправить сообщение на панель</h4>
                        </div>
                         {{Form::open(['url' => 'send', 'method' => 'get'])}}


                        <div class="content">
                            <form>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="targetLabel" for="messageTarget"></label> 
                                            <input type="text" name="messageTarget" class="form-control border-input" required placeholder="Введите топик" value="{{old('messageTarget')}}">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="messageLabel" for="messageBody"></label>
                                            <input type="hidden" name="mode" value="1#">
                                            <textarea name="messageBody" rows="5" class="form-control border-input" placeholder="Введите текст" value="{{old('messageBody')}}"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div id="button" class="text-center">

                                    {!! Form::submit('Отправить', array('class' => 'btn btn-info btn-fill btn-wd')) !!}
                                </div>
                                {{--   Form::select('bright', ['L' => 'Ярко', 'S' => 'Тускло']); --}}
                                <div  class="sent">
                                    Message sent!
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                         {{Form::close()}}
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-lg-8 col-md-7">
                <hr>
                <div class="card">
                    <div class="header">
                        <h4 class="title">Управление яркостью</h4>
                    </div>
                    {{Form::open(['url' => 'send', 'method' => 'get'])}}
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="targetLabel" for="messageTarget"></label>
                                        <input type="text" name="messageTarget" class="form-control border-input" required placeholder="Введите топик" value="{{old('messageTarget')}}">
                                    </div>
                                </div>
                            </div>
                             <input type="hidden" name="mode" value="2#">


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <section class="main clearfix">
                                            <div class="fleft">
                                                <select id="cd-dropdown" class="cd-select">
                                                    <option value="-1" selected>Choose a weather condition</option>
                                                    <option value="1" class="icon-sun">Sun</option>
                                                    <option value="2" class="icon-cloudy">Clouds</option>
                                                    <option value="3" class="icon-weather">Snow</option>
                                                    <option value="4" class="icon-rainy">Rain</option>
                                                    <option value="5" class="icon-windy">Windy</option>
                                                </select>
                                            </div>
                                        </section>


                                        {{--<label class="targetLabel" for="messageTarget"></label>--}}
                                        {{--{{   Form::select('messageBody', ['120' => 'Ярко', '130' => 'Тускло'], array('class' => 'form-control') ) }}--}}
                                    </div>
                                </div>
                            </div>

                            <div id="button" class="text-center">
                            {!! Form::submit('Изменить яркость', array('class' => 'btn btn-info btn-fill btn-wd')) !!}
                            </div>
                        </form>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
