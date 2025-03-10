<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, {{ Auth::user()->name }}</h2>
    <p>Your Email: {{ Auth::user()->email }}</p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html> -->
<!-- resources/views/admin/contact.blade.php -->

@extends('layouts.admin')

@section('content')
    <h1>Contact Page</h1>
    <p>Welcome to the Admin Contact page.</p>
@endsection
