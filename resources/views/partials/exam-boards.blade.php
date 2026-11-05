@php
    $boards = \App\Support\SiteContent::get('exam-boards-section');
    $isBoardsEditor = request()->boolean('editor_preview')
        && request('editor_section') === 'exam-boards-section';
@endphp

<section class="boards" aria-label="Accepted exam boards">
    <div class="container boards-inner">
        <div class="boards-heading reveal">
            <div>
                <p class="eyebrow"><span class="eyebrow-dot"></span><span @if ($isBoardsEditor) data-edit-key="eyebrow" @endif>{{ $boards['eyebrow'] }}</span></p>
                <h2 @if ($isBoardsEditor) data-edit-key="heading" @endif>{{ $boards['heading'] }}</h2>
            </div>
            <div class="boards-copy">
                <p @if ($isBoardsEditor) data-edit-key="text" data-edit-type="textarea" @endif>{{ $boards['text'] }}</p>
                <a href="{{ route('contact.us') }}" class="text-link"><span @if ($isBoardsEditor) data-edit-key="cta_label" @endif>{{ $boards['cta_label'] }}</span>
                    <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 10h11m0 0-4.2-4.2M15 10l-4.2 4.2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </div>
        </div>

        <div class="board-logo-grid reveal">
            <div class="board-logo-card"><img src="{{ asset($boards['aqa_image']) }}" alt="AQA exam board" loading="lazy" @if ($isBoardsEditor) data-edit-image="aqa_image" @endif></div>
            <div class="board-logo-card"><img src="{{ asset($boards['edexcel_image']) }}" alt="Pearson Edexcel exam board" loading="lazy" @if ($isBoardsEditor) data-edit-image="edexcel_image" @endif></div>
            <div class="board-logo-card"><img src="{{ asset($boards['ocr_image']) }}" alt="OCR exam board" loading="lazy" @if ($isBoardsEditor) data-edit-image="ocr_image" @endif></div>
            <div class="board-logo-card"><img src="{{ asset($boards['cambridge_image']) }}" alt="Cambridge International exam board" loading="lazy" @if ($isBoardsEditor) data-edit-image="cambridge_image" @endif></div>
            <div class="board-logo-card"><img src="{{ asset($boards['eduqas_image']) }}" alt="WJEC Eduqas exam board" loading="lazy" @if ($isBoardsEditor) data-edit-image="eduqas_image" @endif></div>
            <div class="board-logo-card"><img src="{{ asset($boards['pearson_image']) }}" alt="Pearson BTEC exam board" loading="lazy" @if ($isBoardsEditor) data-edit-image="pearson_image" @endif></div>
        </div>
    </div>
</section>
