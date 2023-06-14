<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Ticket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form method="POST" action="{{ route('order.update', ['id' => $order->id]) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label class="font-weight-bold">Fullname</label>
                                <input type="text" class="form-control @error('Fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname', $order->name) }}" placeholder="Fullname">

                                <!-- error message untuk title -->
                                @error('fullname')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $order->email) }}" placeholder="Email">

                                <!-- error message untuk title -->
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Phone</label>
                                <input type="text" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp', $order->telp) }}" placeholder="Phone">

                                <!-- error message untuk title -->
                                @error('telp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', $order->address) }}" placeholder="Address">

                                <!-- error message untuk title -->
                                @error('address')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Event Name</label>
                                <input type="text" class="form-control @error('event_name') is-invalid @enderror" name="event_name" value="{{ old('event_name', $order->event_name) }}" placeholder="Event Name">

                                <!-- error message untuk title -->
                                @error('event_name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold"> Ticket Type</label>
                                <select name="ticket_type" class="form-control">
                                    <option value="">Select Type Ticket</option>
                                    <option value="VIP_1" {{ $order->ticket_type == 'VIP_1' ? 'selected':'' }}>VIP 1</option>
                                    <option value="VIP_2" {{ $order->ticket_type == 'VIP_2' ? 'selected':'' }}>VIP 2</option>
                                </select>

                                <!-- error message untuk title -->
                                @error('ticket_type')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Amount</label>
                                <input type="number" min="1" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount', $order->amount) }}" placeholder="Amount">

                                <!-- error message untuk title -->
                                @error('amount')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
