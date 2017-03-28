@cache($note)
<div class="content">
    {{ $note->body }}
    <br>
    <small>{{ $note->created_at->toCookieString() }}</small>
</div>
@endcache
