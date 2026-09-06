@props([
    'title',
    'faqs',
])

<section
  class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
>
  <div class="grid gap-10 md:grid-cols-5">
    <div class="md:col-span-2">
      <div class="max-w-xs">
        <h2
          class="text-2xl font-bold text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200"
        >
          {!! $title !!}
        </h2>
        @if(!empty($faqs['subTitle']))
          <p class="mt-1 hidden text-neutral-600 md:block dark:text-neutral-400">
            {{ $faqs['subTitle'] }}
          </p>
        @endif
      </div>
    </div>
    <div class="md:col-span-3">
      <div
        class="hs-accordion-group divide-y divide-neutral-200 dark:divide-neutral-700"
      >
        @foreach($faqs['faqs'] as $i => $question)
          @php
            $id = 'hs-basic-with-title-and-arrow-stretched-heading-' . ($i + 1);
            $collapseId = 'hs-basic-with-title-and-arrow-stretched-collapse' . ($i + 1);
          @endphp
          <x-blocks.accordion-item
            :question="$question['question']"
            :answer="$question['answer']"
            :id="$id"
            :collapseId="$collapseId"
            :first="$i === 0"
          />
        @endforeach
      </div>
    </div>
  </div>
</section>
