<div class="bgi-no-repeat bgi-position-top bgi-size-cover w-100 h-250px d-flex flex-column-fluid justify-content-start align-items-center bg-bluegrey-600 text-white" style="background-image: url('{{ asset('/storage/wall_2.png') }}')">
    <div class="container">
        @stack("return")
        <x-base.underline
            :title="$title" />
    </div>
</div>
