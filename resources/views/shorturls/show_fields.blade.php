<!-- Original Url Field -->
<div class="col-sm-12">
    {!! Form::label('original_url', 'Original Url:') !!}
    <p>{{ $shorturl->original_url }}</p>
</div>

<!-- Short Url Field -->
<div class="col-sm-12">
    {!! Form::label('short_url', 'Short Url:') !!}
    <p>{{ $shorturl->short_url }}</p>
</div>

<!-- Redirect Count Field -->
<div class="col-sm-12">
    {!! Form::label('redirect_count', 'Redirect Count:') !!}
    <p>{{ $shorturl->redirect_count }}</p>
</div>

