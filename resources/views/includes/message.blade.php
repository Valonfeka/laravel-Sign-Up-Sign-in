@if(count($errors)>0)
    <div class="row">
        <div class="col-md-6">
            <ul>
                @foreach($errors->all() as $error)
                    <li><h1>{{ $error }}</h1></li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(Session::has('message'))
    <div class="row">
        <div class="col-md-6">
          {{Session::get('message')}}
        </div>
    </div>
@endif
