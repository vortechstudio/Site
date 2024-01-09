<div class="container mt-10">
    <div class="row">
        @foreach($blogs as $blog)
            <div class="col-sm-12 col-lg-6 mb-10">
                <a href="{{ $blog->url_to_blog_article }}" class="card shadow-lg text-dark">
                    <img src="{{ $blog->image_full }}" alt="" class="card-img-top hover-scale">
                    <div class="card-body">
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row align-items-center mb-3">
                                <span class="text-gray-700 fw-semibold">{{ $blog->cercles[0]->name }}</span>
                                <span class="bullet bullet-dot bg-primary mx-2"></span>
                                <span class="text-muted fs-4">{{ \Carbon\Carbon::createFromTimestamp(strtotime($blog->published_at))->format("d/m/Y") }}</span>
                            </div>
                            <span class="fs-3">{{ $blog->title }}</span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    @if($blogsI->count() > $this->limit)
        <div class="d-flex flex-center">
            <button wire:click="loadMore" class="btn btn-lg rounded-5 btn-outline btn-outline-primary w-25" wire:loading.attr="disabled">
                <span wire:loading.class="d-none">PLUS</span>
                <span class="d-none" wire:loading.class.remove="d-none">
                Chargement... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
            </button>
        </div>
    @endif
</div>
