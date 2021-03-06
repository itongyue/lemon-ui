@style
<style>
    .input-group-addon {
        padding: 0;
    }

    .input-group-addon .btn {
        background: transparent;
        border: none;
        border-radius: 0;
        margin: 0;
        line-height: 14px;
    }
</style>
@endstyle
@if($prepend || $append)
    <div class="input-group">
        @if($prepend)
            <span class="input-group-addon">{!! $prepend !!}</span>
        @endif
        <input id="{{ $id }}" type="{{ $input }}" name="{{ $name }}" value="{{ $value }}"
               placeholder="{{ $placeholder }}" class="form-control {{ $class }}" {!! $attributes !!}>
        @if($append)
            <span class="input-group-addon">{!! $append !!}</span>
        @endif
    </div>
@else
    <input id="{{ $id }}" type="{{ $input }}" name="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }}"
           class="form-control {{ $class }}" {!! $attributes !!}>
@endif

@php
    if (empty($config)) {
        $config = array('alias' => $type);
    }

    if (isset($symbol)) {
        $config['radixPoint'] = '.';
        $config['prefix']     = '';
        $config['removeMaskOnSubmit'] =true;
    }

    if (isset($digits)) {
        $config['digits'] = $digits;
    }
@endphp

@if($config['alias'] != 'text')
    @script

    {{--
    <script>
        $(function() {
            $('#{{ $id }}').inputmask(@json($config));
        });
    </script>
    --}}
    @endscript
@endif
