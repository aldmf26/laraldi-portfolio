<div wire:ref="myDiv">
    <section class="py-10">
        <h1 class="text-center lg:text-2xl font-bold py-2">
            My Coding Projects
        </h1>
        <hr class="my-5 mx-10 opacity-10 text-primary">
        <div class="hilang">
            @foreach ($projects as $p)
                <div class="flex py-8 px-16 border-neon">
                    <div class="w-1/2 p-6">
                        <img x-intersect="$el.classList.add('scale')" class="shadow-sm rounded-lg"
                            src="img/{{ $p->img }}" alt="Gambar dengan shadow dan glow">
                    </div>
                    <div class="w-1/2 p-6">
                        <h2 x-intersect="$el.classList.add('fadeInUp')" class="text-2xl font-bold mb-4 text-primary">
                            {{ $p->judul }}</h2>
                        <p x-intersect="$el.classList.add('fadeInUp')" class="text-secondary leading-relaxed">
                            {{ $p->deskripsi }}</p>

                        <div x-intersect="$el.classList.add('fadeInUp')" class="flex">
                            @php
                                $decode = array_chunk(json_decode($p->teknologi), 2);
                            @endphp
                            @foreach ($decode as $t)
                                <div class="w-1/2 p-6 ">
                                    @foreach ($t as $d)
                                        
                                        <p><i class="fa-regular fa-circle-check text-btnBg mt-5"></i> {{ ucwords($d) }}</p>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <a x-intersect="$el.classList.add('scale')" href="{{ $p->url }}" target="_blank"
                            class="leading-relaxed rounded hover:bg-primary bg-baju text-hitam border border-spacing-4 py-2 px-2"><i
                                class="fa-solid fa-link "></i> View Demo</a>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="mobileHilang">
            @foreach ($projects as $p)
                <div class="container flex items-center justify-center md:flex-row py-8">
                    <div class="lg:mx-28 text-center md:text-left">
                        <div class="m-5 relative space-y-4">
                            <h2 x-intersect="$el.classList.add('fadeInUp')"
                                class="text-2xl font-bold mb-4 text-primary">
                                {{ $p->judul }}</h2>
                            <img x-intersect="$el.classList.add('scale')" class="shadow-sm rounded-lg"
                                src="img/{{ $p->img }}" alt="Gambar dengan shadow dan glow">
                            <p x-intersect="$el.classList.add('fadeInUp')" class="text-secondary leading-relaxed">
                                {{ $p->deskripsi }}</p>
                        </div>
                        <div x-intersect="$el.classList.add('fadeInUp')" class="flex pb-5">
                            @php
                                $decode = array_chunk(json_decode($p->teknologi), 2);
                            @endphp
                            @foreach ($decode as $t)
                                <div class="w-1/2 p-2 text-center ">
                                    @foreach ($t as $d)
                                        <i class="fa-regular fa-circle-check text-btnBg mt-1"></i>
                                        <p>{{ ucwords($d) }}</p>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <a href="{{ $p->url }}" target="_blank" x-intersect="$el.classList.add('scale')"
                            class="leading-relaxed rounded hover:bg-primary bg-baju text-hitam border border-spacing-4 py-2 px-2"><i
                                class="fa-solid fa-link "></i> View Demo</a>
                    </div>
                </div>
            @endforeach
        </div>


    </section>
    {{-- btn loadmore --}}
    @if ($total != $count)
    <div style="margin-top: -40px;" class="pb-5 my-16 mx-16 flex items-center justify-center md:flex-row"
        x-intersect="$el.classList.add('scale')">
        <button wire:click="loadData" class="btn btn-block btn-outline text-baju hover:bg-secondary">
            Load More 
            <i class="fa-solid fa-angles-right ml-2"></i>
        </button>
    </div>
    @endif
</div>
