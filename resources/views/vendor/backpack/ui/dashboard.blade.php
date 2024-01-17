@extends(backpack_view('blank'))

@section('content')
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Georgia', serif; 
    }

    .dashboard-container .admin-panel {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        text-align: center;
    }

    .dashboard-container h1 {
        color: #9370db; 
    }
</style>

<div class="dashboard-container">
<div class="admin-panel">
    <h1>WELCOME TO THE ADMIN PANEL OF SPORT EVENTS!</h1>
</div>
</div>

@endsection
