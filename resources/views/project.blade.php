<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Project</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
    .container {
    max-width: 500px;
    margin: 50px auto;
    text-align: left;
    font-family: sans-serif;
    }

    form {
        border: 1px solid;
        /*background: #ecf5fc;*/
        padding: 40px 50px 45px;
    }

    .form-control:focus {
        border-color: #000;
        box-shadow: none;
    }

    label {
        font-weight: 600;
    }

    .error {
        color: red;
        font-weight: 400;
        display: block;
        padding: 6px 0;
        font-size: 14px;
    }

    .form-control.error {
        border-color: red;
        padding: .375rem .75rem;
    }
    .row {
    display: flex;
    }

    /* Create two equal columns that sits next to each other */
    .column {
    flex: 50%;
    padding: 10px;
    }
    </style>        
    </head>
    <body class="">
    <div class="container">
	<h3 style="text-align:center">Add New Project</h3>
    <div>
     @if(Session::has('success'))
     <div class="alert alertsuccess">
        {{ Session::get('success')}}
     </div>
     @endif
    </div>
	
    	<form method="POST" action="{{route('store')}}">
    @csrf
    <div class="row">
        <div class="column form-group">
            <label>Project Number</label>
            <input type="text" class="form-control {{ $errors->has('p_number') ? 'error' : '' }}" name="p_number" id="p_number">
        </div>    
    
        <div class="column form-group">
            <label>Project Name</label>
            <input type="text" class="form-control {{ $errors->has('p_name') ? 'error' : '' }}" name="p_name" id="p_name">
        </div>
    </div>
    <div class="row">
        <div class="column form-group">
            <label>Project Lead</label>
            <input type="text" class="form-control {{ $errors->has('p_lead') ? 'error' : '' }}" name="p_lead" id="p_lead">
        </div>

        <div class="column form-group">
            <label>Status</label>
            <input type="text" class="form-control {{ $errors->has('status') ? 'error' : '' }}" name="status"
                id="status">
        </div>
    </div>
    <div class="row">
    <div class="column form-group">
        <label>Price</label>
        <input type="text" class="form-control {{ $errors->has('price') ? 'error' : '' }}" name="price"
                id="price">
    </div>
    </div>
    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
</form>

</div>
    </body>
</html>
