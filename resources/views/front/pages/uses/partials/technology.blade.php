<?php /** @var \App\Models\Technology $technology */ ?>

<div id="mailcoach" class="sm:col-span-3 items-start pb-16">
    <div class="flex items-center mb-4">
        <div class="flex-none avatar mr-4">
            <img src="{{ $technology->image_url }}" alt="{{ $technology->name }}">
        </div>
        <div>
            <h3 class="title-sm">
                {{ ucfirst($technology->name) }}
            </h3>
            <div class="text-sm">
                <a class="link-underline link-blue" target="_blank" rel="nofollow noreferrer noopener" href="{{ $technology->website_url }}">{{ $technology->website_url }}</a></li>
                <span class="icon fill-current text-blue">{{ svg('icons/far-angle-right') }}</span>
            </div>
        </div>
    </div>
    <div class="line-l text-sm">

        <div class="markup links-underline links-blue">
            <p>
                {{ $technology->description }}
            </p>
        </div>
        <div class="mt-4 flex">
            <div class="flex -space-x-2">
                @foreach($technology->recommended_by as $name)
                    <x-avatar name="{{ $name }}" href=""/>
                @endforeach
            </div>
            <span class="ml-2 text-xs text-gray">recommend this</span>
        </div>
    </div>
</div>
