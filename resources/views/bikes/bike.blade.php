<a href="/bikes/{{ $bike->code }}">
    <div class="card">
        <header class="card-header">
        <p class="card-header-title">
          {{ $bike->code }}
        </p>
      </header>
      <div class="card-image">
        <figure class="image is-4by3">
          <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">
        </figure>
      </div>
      <div class="card-content">
        <div class="media-content">
            <p>{{ $bike->type }}</p>
            <p>{{ $bike->color }}</p>
        </div>
      </div>
    </div>
</a>
