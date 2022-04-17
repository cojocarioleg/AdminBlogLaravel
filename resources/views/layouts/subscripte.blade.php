<div class="newsletter-widget text-center align-self-center @if (!Request::is('/')) widget @endif  ">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    <h3>Subscribe Today!</h3>
    <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
    <form class="form-inline" method="post" action="{{ route('email.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Add your email here.." required class="form-control" id="title" />

        <button type="submit" class="btn btn-default btn-block">Save</button>

    </form>
</div><!-- end newsletter -->
