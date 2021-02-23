<div>
    @if($errors->all())
    @foreach($errors->all() as $message)
    <div class="alert alert-danger alert-dismissible" style="margin-bottom: 20px;">
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
    </div>
    @endforeach

    @elseif(session()->has('message'))
    <div class="alert alert-success alert-dismissible" style="margin-bottom: 20px;">
        {!! session()->get('message') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
    </div>

    @elseif(session()->has('error'))
    <div class="alert alert-danger alert-dismissible" style="margin-bottom: 20px;">
        {{ session()->get('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
    </div>
    @endif
</div>