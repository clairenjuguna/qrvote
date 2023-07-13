@extends('admin.admin_master')
@section('admin')



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="container">
        <h1>Upvoted Complaints</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Annonymous name</th>
                    <th>ComplaintSubject</th>
                    <th>Complaint details</th>
                    <th>VoteCount</th>

                    <th>Vote Count</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($upvotedComplaints as $index => $complaint)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $complaint->annonymous_name }}</td>
                        <td>{{ $complaint->complaint_subject }}</td>
                        <td>{{ $complaint->complaint_details }}</td>
                        <td>{{ $complaint->vote_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
