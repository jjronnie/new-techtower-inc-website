@props([
    'title',
    'highlight' => null,
    'subtitle' => null,
    'breadcrumbs' => [],
])

<section class="relative pt-32 pb-16 px-4 hero-bg hero-grid-bg">
    <div class="max-w-7xl mx-auto text-center">

        @if(count($breadcrumbs))
            <nav class="flex items-center justify-center space-x-2 text-sm mb-6">
                @foreach ($breadcrumbs as $crumb)
                    @if (!$loop->last)
                        <a href="{{ $crumb['url'] }}"
                           class="text-gray-400 hover:text-white transition">
                            {{ $crumb['label'] }}
                        </a>
                        <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                    @else
                        <span class="text-[--primary]">{{ $crumb['label'] }}</span>
                    @endif
                @endforeach
            </nav>
        @endif

        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-bold mb-6">
            {{ $title }}
            @if($highlight)
                <span class="text-gradient">{{ $highlight }}</span>
            @endif
        </h1>

        @if($subtitle)
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                {{ $subtitle }}
            </p>
        @endif

        {{ $slot ?? '' }}
    </div>
</section>
