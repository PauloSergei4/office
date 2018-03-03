@if (session ('notification'))
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="alert alert-success">
                    <button type="button" aria-hidden="true" class="close">×</button>
                    {{session ('notification')}}
                </div>
            </div>
        </div>
    </div>
@endif