@php
    $name = $attributes['name'];
    $placeholder = $attributes['placeholder'];
    $label = $attributes['label'];
    $type = $attributes['type'] ?? 'text';
    $value = $attributes['value'] ?? old($name);
@endphp
<div class="form-group mb-3">
    <label class="form-label">{{ $label }}</label>
    <input value="{{$value}}" type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
        class="@error($name) is-invalid @enderror form-control">
</div>
@error($name)
    <p class="text-danger">{{ $message }}</p>
@enderror
