<html>
    <body>
        <h1>{{ $emailData['name'] }}</h1>
        <p><strong>Sent:</strong> {{ \Carbon\Carbon::now()->format('m/d/Y G:i A T') }}</p>
        <p><strong>Email:</strong> {{ $emailData['email'] }}</p>
        <p><strong>Phone:</strong> {{ $emailData['phone'] }}</p>
        <p><strong>Department:</strong> {{ $emailData['department'] }}</p>
        <p><strong>Message:</strong></p>
        <p>{{ $emailData['message'] }}</p>
    </body>
</html>