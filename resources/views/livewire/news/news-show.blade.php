<div>
    @push("return")
        <a href="{{ route('news') }}" class="d-flex align-items-center mb-5 fs-2 text-white">
            <i class="fa-solid fa-arrow-circle-left fs-2x text-gray-300 me-3"></i>
            <span>Retour</span>
        </a>
    @endpush
    <div class="container mt-5 mb-10">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="fs-3x mb-3">{{ $title }}</div>
            <div class="d-flex flex-row gap-10">
                <span class="badge badge-lg badge-primary">{{ $article->subcategory_string }}</span>
                <span class="text-gray-600 fw-semibold">{{ \Carbon\Carbon::createFromTimestamp(strtotime($article->published_at))->format("d/m/Y") }}</span>
            </div>
        </div>
        <div class="separator border-3 separator-content border-primary my-15">
            <div class="symbol symbol-50px symbol-circle">
                <img src="{{ $article->cercles[0]->image }}" alt="">
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="fst-italic fs-3">{{ $article->description }}</div>
            <img src="{{ $article->image_heading }}" alt="" class="rounded-2 my-10">
            {!! $article->contenue !!}
        </div>
    </div>
</div>
