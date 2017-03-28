@cache($card)
<div class="column is-quarter">
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                {{ $card->title }}
            </p>
            <a class="card-header-icon">
                          <span class="icon">
                            <i class="fa fa-angle-down"></i>
                          </span>
            </a>
        </header>
        <div class="card-content">
            @foreach($card->notes as $note)
                @include('cards._note')
            @endforeach
        </div>
    </div>

</div>
@endcache
