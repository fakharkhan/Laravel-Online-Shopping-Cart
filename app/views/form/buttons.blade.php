<div class="center">
    @if(isset($submit))
        <button type="submit" class="btn btn-primary">
            {{ $submit }}
        </button>
    @endif

    @if(isset($cancel))
    <button type="reset" class="btn btn-default">
        {{ $cancel }}
    </button>
    @endif
</div>