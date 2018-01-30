 @extends('training.training')


@section('content')
 <section class="training container">
        {{-- Title --}}
        <div>
            <h1>Training</h1>
        </div>
            @include('training.nav')

            {{-- Training Area  --}}
            <div class="col m9 s12">
                {{-- Training Content --}}
                <h5>Lesson Example</h5>

                <iframe src="https://player.vimeo.com/video/116009930" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                {{-- Use when individual lessons have been created --}}
                {{-- @yield ('lesson-content')  --}}
{{-- Include if you want to show lessons with topic and body for each section--}}
               {{--  @foreach($lessons as $lesson)

                    @include('training.lesson')

                @endforeach --}}

                <div class="right-align">
                    <button class="btn">Next</button>
                </div>
            </div>
        </div>
@endsection
