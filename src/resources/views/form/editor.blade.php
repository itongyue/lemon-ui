<textarea id="{{ $id }}" name="{{ $name }}" class="form-control {{ $class }}"
          placeholder="{{ $placeholder }}" {!! $attributes !!} >{{ $value }}</textarea>
@script
<script>
    $(document).on("ready pjax:end", function () {
        CKEDITOR.replace('{{ $id }}');
    });
</script>
@endscript

@script

function getCKEditorData() {
$('#{{ $id }}').val(CKEDITOR.instances.{{ $id }}.getData())
}

@endscript