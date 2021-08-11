<div class="bg-white shadow bg-opacity-75 rounded mx-3 my-3">
    @props(['disabled' => false])
    <div class="rounded flex flex-col">
        <label class="text-left text-xs px-3 pt-1 text-gray-800">
            {{ $label }}
        </label>
        <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-0 border-b-4 border-yellow-300 hover:border-yellow-500 focus:border-yellow-500 focus:ring-0 bg-transparent py-0 duration-500 transition-colors rounded px-3 pb-1 focus:outline-none']) !!}>
    </div>
</div>