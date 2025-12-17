@props([
    'status'
])


<div class="flex items-center gap-2">
    <span @class([
        'h-1.5 w-1.5 rounded-full ring-1 ring-inset',
        'bg-emerald-400 ring-emerald-400/20 shadow-[0_0_8px_rgba(52,211,153,0.5)]' => $status === \App\ProjectStatus::Open,
        'bg-amber-400 ring-amber-400/20 shadow-[0_0_8px_rgba(251,191,36,0.5)]'    => $status === \App\ProjectStatus::Pending,
        'bg-rose-400 ring-rose-400/20 shadow-[0_0_8px_rgba(251,113,133,0.5)]'     => $status === \App\ProjectStatus::Closed,
    ])></span>

    <span class="text-xs font-medium text-gray-400">
        {{ $status->label() }}
    </span>
</div>

{{--<span {{$attributes->class([--}}
{{--    'bg-emerald-900 text-white' => $status == \App\ProjectStatus::Open,--}}
{{--    'bg-orange-100 text-white' => $status == \App\ProjectStatus::Pending,--}}
{{--    'bg-red-900 text-white' => $status == \App\ProjectStatus::Closed--}}
{{--])}}>--}}
{{--                    {{ $status->label() }}--}}
{{--                </span><?php--}}
