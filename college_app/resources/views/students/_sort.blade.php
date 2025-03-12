<div class="d-flex align-items-center">
    <span class="me-2">Sort by:</span>
    @php
        $isSorted = request()->query('sort') === 'name';
        $sortUrl = $isSorted ? request()->url() : request()->fullUrlWithQuery(['sort' => 'name']);
    @endphp
    <a href="{{ $sortUrl }}" class="btn btn-sm {{ $isSorted ? 'btn-primary' : 'btn-outline-primary' }}">
        Name
    </a>
</div>
