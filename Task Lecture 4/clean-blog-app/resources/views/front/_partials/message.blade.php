@if (session('success') != null)
    <div class="alert alert-success p-2 text-center">
        {{ session('success') }}
    </div>
@endif
