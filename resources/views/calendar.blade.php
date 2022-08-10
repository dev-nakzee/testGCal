@extends('app')
@section('content')
<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>Google Event</th>
            <th>Event Date</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($calData as $data => $googleEvents)
        @foreach ($googleEvents as $googleEvent => $eventDetails)
            <tr>
                <td>{{ $eventDetails['summary']}}</td>
                <td>{{ date('d-m-Y', strtotime($eventDetails['start']['dateTime']))}}</td>
                <td>{{ date('H:i:s', strtotime($eventDetails['start']['dateTime']))}}</td>
                <td>{{ date('H:i:s', strtotime($eventDetails['end']['dateTime']))}}</td>
                <td>{{ $eventDetails['status']}}</td>
            </tr>
        @endforeach
    @endforeach
    </tbody>
</table>
@endsection