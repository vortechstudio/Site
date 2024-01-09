<div class="my-10">
    @push("return")
        <a href="{{ route('products') }}" class="d-flex align-items-center mb-5 fs-2 text-white">
            <i class="fa-solid fa-arrow-circle-left fs-2x text-gray-300 me-3"></i>
            <span>Retour</span>
        </a>
    @endpush
    <div class="container-fluid mb-5">
        <div class="d-flex flex-column justify-content-end align-items-end rounded-4 bgi-no-repeat bgi-size-cover bgi-position-center h-350px w-100 mb-5" style="background-image: url({{ $article->image_header }})">
            <div class="d-flex flex-row align-items-center h-70px w-100 bg-opacity-75 bg-gray-600 rounded-bottom-4 px-5">
                <div class="symbol symbol-45px me-3">
                    <img src="{{ $article->image_icon }}" alt="">
                </div>
                <div class="d-flex flex-column flex-grow-1">
                    <span class="opacity-100 text-white fw-bold fs-2">{{ $article->name }}</span>
                    <div class="text-muted">{{ $article->latest_version }}</div>
                </div>
                <div class="me-5">
                    {!! $article->type_label !!}
                </div>
                <div class="me-5">
                    {!! $article->status_label !!}
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="d-flex flex-wrap align-items-center p-5 bg-gray-300 rounded-3 mb-5">
            <ul class="nav nav-tabs nav-line-tabs mb-5 fs-3">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#general">Général</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#news">Actualités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#updates">Mise à jour</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container" wire:loading.class="bg-opacity-75 bg-gray-600">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="general" role="tabpanel">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="fst-italic">{{ $article->description }}</div>
                    <div class="separator border-3 separator-content border-primary my-15">
                        <div class="symbol symbol-50px symbol-circle">
                            <img src="{{ $article->image_icon }}" alt="">
                        </div>
                    </div>
                    {!! $article->page_content !!}
                </div>

            </div>
            <div class="tab-pane fade" id="news" role="tabpanel">
                <div class="tns tns-default my-10" style="direction: ltr">
                    <div
                        data-tns="true"
                        data-tns-loop="true"
                        data-tns-swipe-angle="false"
                        data-tns-speed="2000"
                        data-tns-autoplay="true"
                        data-tns-autoplay-timeout="18000"
                        data-tns-items="3"
                        data-tns-center="true"
                        data-tns-slide-by="true"
                        data-tns-nav-container="#kt_slider_thumbnails"
                        data-tns-nav-as-thumbnails="true"
                        data-tns-prev-button="#kt_slider_prev"
                        data-tns-next-button="#kt_slider_next"
                    >
                        @foreach($articles as $news)
                            <div class="card shadow-lg me-5">
                                <img src="{{ $news->image_full }}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <a href="{{ $news->url_to_blog_article }}" class="btn btn-link fw-bold">{{ $news->title }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="updates" role="tabpanel">
                @if(count($article->notes) == 0)
                    <x-base.is-null
                        text="Aucune mise à jour n'a été publiée pour le moment." />
                @else
                    <div class="row">
                        <div class="col-3">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div id="menu-version" class="list-group">
                                        @foreach(collect($article->notes)->where('published', true) as $version)
                                            <a class="list-group-item list-group-item-action" href="#{{ Str::slug($version->version) }}">
                                                <div class="d-flex flex-row justify-content-between align-items-center">
                                                    <span class="fw-bold">{{ $version->version }}</span>
                                                    @if($version->is_latest)
                                                        <span class="badge badge-lg badge-primary">Actuel</span>
                                                    @endif
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <div data-bs-spy="scroll" data-bs-target="#menu-version" data-bs-smooth-scroll="true" tabindex="0">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        @foreach(collect($article->notes)->where('published', true) as $version)
                                            <div id="{{ Str::slug($version->$version) }}">
                                                <x-base.underline
                                                    :title="$version->title" />

                                                <div class="fst-italic my-5">{{ $version->description }}</div>
                                                {!! $version->contenue !!}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

</div>
