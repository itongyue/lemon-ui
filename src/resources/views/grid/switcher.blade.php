<input type="checkbox" name="{{ $name }}" class="grid-switch-{{ $name }}" {{ $value == $on['value']?'checked':'' }} />
@script('switch', $name)
<script>
    $(document).on('ready pjax:end', function () {
        $('.grid-switch-{{ $name }}:not(.initialized)').bootstrapSwitch({
            size: 'mini',
            onText: '{{ $on['label'] }}',
            onColor: '{{ $on['color']?:'primary' }}',
            offText: '{{ $off['label'] }}',
            offColor: '{{ $off['color']?:'default' }}'
        });
        $('.grid-switch-{{ $name }}').addClass('initialized');
    });
</script>
@endscript