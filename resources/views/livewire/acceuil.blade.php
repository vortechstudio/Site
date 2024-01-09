<div>
    <div class="container mb-5">
        <div class="d-flex flex-row justify-content-between align-items-center">
            <x-base.underline
                title="Dernières Nouvelles" />

            <a href="" class="btn rounded-5 btn-sm btn-light-primary">Plus</a>
        </div>

        <div class="d-flex flex-wrap gap-6">
            @if(count($articles) != 0)
                @foreach($articles as $article)
                    <a href="{{ $article->url_to_blog_article }}" class="card card-flush bgi-no-repeat bgi-size-cover bgi-position-center w-300px h-350px hover-scale" style="background-image: url('{{ $article->image_full }}');">
                        <div class="card-body d-flex flex-column justify-content-end align-items-start text-white">
                            <span class="fs-9">{{ $article->cercles[0]->name }}</span>
                            <span class="fs-8">{{ $article->title }}</span>
                        </div>
                        <span class="badge badge-primary position-absolute top-0 end-0 m-5">{{ $article->subcategory_string }}</span>
                    </a>
                @endforeach
            @else
                <x-base.is-null
                    text="Aucun article n'a été publié pour le moment !" />
            @endif
        </div>

    </div>
    <div class="separator border-3 separator-content border-primary my-10">
        <div class="symbol symbol-30px symbol-circle">
            <img src="{{ asset('/storage/logo_seul.png') }}" alt="">
        </div>
    </div>
    <div class="container mb-5">
        <x-base.underline
            title="Nos Créations" />

        <div class="d-flex flex-wrap justify-content-center align-items-center gap-6 mt-5">
            @if(count($services) != 0)
                @foreach($services as $service)
                    <a class="card card-flush shadow-lg card-bordered border-gray-400 text-black w-500px">
                        <div class="card-header">
                            <img src="{{ $service->image_src }}" class="card-img-top hover-scale" alt="">
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <div class="d-flex flex-row">
                                    <div class="symbol symbol-70px me-3">
                                        <img src="{{ $service->image_icon }}" alt="">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="fs-3 mb-4">{{ $service->name }}</span>
                                        <span class="fs-6">{{ $service->description }}</span>
                                    </div>
                                </div>
                                <button class="btn btn-lg rounded-5 btn-outline btn-outline-primary hover-elevate-up">Plus</button>
                            </div>
                        </div>
                    </a>
                @endforeach
            @else
                <x-base.is-null
                    text="Aucun service n'a été publié pour le moment !" />
            @endif
        </div>
    </div>
    <div class="separator border-3 separator-content border-primary my-10">
        <div class="symbol symbol-30px symbol-circle">
            <img src="{{ asset('/storage/logo_seul.png') }}" alt="">
        </div>
    </div>
    <div class="container-fluid d-flex flex-column-fluid justify-content-center align-items-center h-350px">
        <x-base.background-animated />
        <div class="d-flex flex-row justify-content-around align-items-center my-auto gap-5">
            <a href="" class="bg-opacity-75 bg-gray-600 bg-hover-light-primary text-hover-dark w-sm-100 w-lg-550px h-250px p-5 text-white hover-scale">
                <span class="d-flex flex-row justify-content-between align-items-center">
                    <span class="d-flex flex-column">
                        <x-base.underline
                            title="A Propos de nous !" />

                        <span>Simuler au plus proche !</span>
                    </span>
                    <span class="d-flex flex-column justify-content-end align-items-end">
                        <i class="fa-solid fa-arrow-circle-right fs-3x"></i>
                    </span>
                </span>
            </a>
            <a href="" class="bg-opacity-75 bg-gray-600 bg-hover-light-primary text-hover-dark w-sm-100 w-lg-550px h-250px p-5 text-white hover-scale">
                <span class="d-flex flex-row justify-content-between align-items-center">
                    <span class="d-flex flex-column">
                        <x-base.underline
                            title="Rejoindre Vortech Studio" />

                        <span>Parcourez l'ensemble de l'environnement de Vortech Studio</span>
                    </span>
                    <span class="d-flex flex-column justify-content-end align-items-end">
                        <i class="fa-solid fa-arrow-circle-right fs-3x"></i>
                    </span>
                </span>
            </a>
        </div>
    </div>
</div>
