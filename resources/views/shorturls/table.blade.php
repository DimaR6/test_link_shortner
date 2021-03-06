<div class="table-responsive">
    <table class="table" id="shorturls-table">
        <thead>
        <tr>
            <th>Original Url</th>
        <th>Short Url</th>
        <th>Redirect Count</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($shorturls as $shorturl)
            <tr>
                <td><a href="{{ $shorturl->original_url }}" target="_blank" >{{ $shorturl->original_url }}</a></td>
                <td><a href="{{ route('redirectToOriginalUrl', [$shorturl->short_url]) }}" target="_blank" >{{ route('redirectToOriginalUrl', [$shorturl->short_url]) }}</a></td>
                <td>{{ $shorturl->redirect_count }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['shorturls.destroy', $shorturl->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shorturls.show', [$shorturl->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('shorturls.edit', [$shorturl->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
