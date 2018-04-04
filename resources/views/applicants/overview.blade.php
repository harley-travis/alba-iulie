@extends('layouts.app')

@section('content')
	<h2>Applicants</h2>

	<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
      <thead>
        <tr>
          <th class="mdl-data-table__cell--non-numeric">ID</th>
          <th>Applicant</th>
          <th>Position</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Date</th>
          <th>Resume</th>
        </tr>
      </thead>
      <tbody>

          @foreach($applicants as $applicant)

            <tr>
              <td class="mdl-data-table__cell--non-numeric">{{ $applicant->id }}</td>
              <td>{{ $applicant->firstName }} {{ $applicant->lastName }}</td>
              <td>TBD</td>
              <td>{{ $applicant->phone }}</td>
              <td>{{ $applicant->email }}</td>
              <td>{{ $applicant->dateApplied }}</td>
              <td><a href="#">Link</a></td>
            </tr>

          @endforeach

      </tbody>
    </table>

		

	
@endsection

