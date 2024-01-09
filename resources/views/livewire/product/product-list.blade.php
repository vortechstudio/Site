<div class="container d-flex flex-column justify-content-center align-items-center mt-10">
    @if(count($services) !== 0)
        <div class="row">
            @foreach($services as $service)
                <div class="col-sm-12 col-lg-6 mb-10">
                    <a href="{{ route('products.show', $service->id) }}" class="card card-flush shadow-lg card-bordered border-gray-400 text-black w-500px">
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
                </div>
            @endforeach
        </div>
        @if($serviceI->count() > $this->limit)
            <div class="d-flex flex-center">
                <button wire:click="loadMore" class="btn btn-lg rounded-5 btn-outline btn-outline-primary w-25" wire:loading.attr="disabled">
                    <span wire:loading.class="d-none">PLUS</span>
                    <span class="d-none" wire:loading.class.remove="d-none">
                Chargement... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
                </button>
            </div>
        @endif
    @else
        <x-base.is-null
            text="Aucun service n'a été trouvé" />
    @endif
</div>
