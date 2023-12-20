@extends('layouts.app')

@section('content')
    <h1>Quiz List</h1>
    <div class="row">
        @foreach($quizzes as $quiz)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $quiz['photo'] }}" class="card-img-top" alt="{{ $quiz['name'] }} image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $quiz['name'] }}</h5>
                        <p class="card-text">
                            Status:
                            <span class="badge @if($quiz['status'] === 'active') badge-success @elseif($quiz['status'] === 'inactive') badge-secondary @else badge-warning @endif">
                                {{ $quiz['status'] }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <footer>
        <div class="container">
            <h2>Subscribe</h2>
            <form action="{{ route('subscribe') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>
        </div>
    </footer>
@endsection

@push('styles')
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Your custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- Your additional scripts -->
    <script src="{{ asset('js/custom.js') }}"></script>
@endpush
