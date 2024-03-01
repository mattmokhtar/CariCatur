{{-- 
    BCS3453 [PROJECT]-SEMESTER 2324/1
    Student ID: CB21032
    Student Name: MUHAMMAD BIN MOKHTAR 
--}}
@extends('organizer.organizer-master')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <br>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
    
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                    <form method="POST" action="{{ url('/organizer/edit_event/'.$event->id) }}">
                        @csrf
                      

                        <div class="mb-3">
                            <label for="eventname" class="form-label">Event Name:</label>
                            <input type="text" class="form-control" name="eventname" value="{{$event->eventname }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="datetime" class="form-label">Event Date and Time:</label>
                            <input type="datetime-local" class="form-control" name="date" value="{{ $event->date}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Event Location:</label>
                            <input type="text" class="form-control" name="location" value="{{ $event->location }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Event Description:</label>
                            <textarea class="form-control" name="description" rows="3" required>{{$event->description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="contact" class="form-label">Name and Contact Number:</label>
                            <input type="text" class="form-control" name="contact" value="{{ $event->contact}}" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button> &nbsp;
                            <button type="update" class="btn btn-outline-primary">Create Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
