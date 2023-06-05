<h3>Contact Us Message</h3>
<p>Files</p>
@foreach ($data['file'] as $filePath)
  <a href="{{ $filePath }}">{{ $filePath }}</a></p>
@endforeach

<p>Name: {{ $data['name'] }}</p>
<p>Email: {{ $data['email'] }}</p>
<p>Phone: {{ $data['phone'] }}</p>
<p>Message: {{ $data['message'] }}</p>


{{-- <p>File: {{ $file }}</p>
<p>Name: {{ $name }}</p>
<p>Email: {{ $email }}</p>
<p>Phone: {{ $phone }}</p>
<p>Message: {{ $message }}</p> --}}

