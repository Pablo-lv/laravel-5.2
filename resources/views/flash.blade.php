@if (session()->has('flash_message'))
    <div class="alert alert-{{ session('flash_message_level') }}">
        {{ Session::get('flash_message') }}
    </div>
@endif