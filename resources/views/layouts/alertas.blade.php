@if (@isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        <ul class="list-unstyled mb-0"> 
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::get('success',false))
    <?php $success = Session::get('success',); ?>
    @if (is_array($success))
        @foreach ( $success as $message )
            <div class="alert alert-success">
                <i class="list-unstyled mb-0"></i> 
                    {{$message}}
            </div>
        @endforeach
    @else
        <div class="alert alert-success">
            <i class="list-unstyled mb-0"></i> 
                {{$success}}
        </div>
    @endif
@endif