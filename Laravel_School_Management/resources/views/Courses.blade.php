<x-app-layout>
    <x-slot name="header">
        <!-- Your header content here -->
    </x-slot>

    <main slot="main">
        <br>
		<table>
			<thead>
				<tr>
					<th>Title</th>
					<th>Description</th>
					<th>PDF</th>
				</tr>
			</thead>
			<tbody>
				@foreach($courses as $course)
					<tr>
						<td>{{ $course->title }}</td>
						<td>{{ $course->description }}</td>
						<td>
							@if ($course->file_path)
								<a href="{{ Storage::url($course->file_path) }}" target="_blank">View PDF</a>
							@else
								No PDF available
							@endif
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		
    
  
	</x-app-layout>