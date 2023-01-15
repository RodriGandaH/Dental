@props(['status'])

@if ($status)
<div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-700 bg-green-200']) }}>
    {{ $status }}
</div>
@endif