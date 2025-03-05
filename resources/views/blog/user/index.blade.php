<x-app-layout>
    <x-slot name="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __("Main page") }}</div>

                        <div class="card-body">
                            @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __("Welcome") . " " . Auth::user()->name }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
