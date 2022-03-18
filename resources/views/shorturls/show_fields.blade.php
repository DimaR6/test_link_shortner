<!-- Original Url Field -->
<div class="col-sm-12">
    {!! Form::label('original_url', 'Original Url:') !!}
    <a href="{{ $shorturl->original_url }}" target="_blank" >{{ $shorturl->original_url }}</a>
</div>

<!-- Short Url Field -->
<div class="col-sm-12">
    {!! Form::label('short_url', 'Short Url:') !!}
    <!-- todo move to mapper -->
    <a href="{{ route('redirectToOriginalUrl', [$shorturl->short_url]) }}" target="_blank" >{{ route('redirectToOriginalUrl', [$shorturl->short_url]) }}</a>
</div>

<!-- Redirect Count Field -->
<div class="col-sm-12">
    {!! Form::label('redirect_count', 'Redirect Count:') !!}
    <p>{{ $shorturl->redirect_count }}</p>
</div>

