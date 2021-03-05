<div>
    @if(!$btnCall)
        <div class="chatbox-call">
            <a href="{{ route('call-me') }}">
                <i class="fa fa-phone fa-2x"></i>
            </a>
        </div>
    @endif
</div>