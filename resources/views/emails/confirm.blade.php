<!DOCTYPE html>
<html>
<head>
    <title>cofirm email</title>
</head>
<body>
<h1>thanks for register</h1>

<p>please click the url <a href="{{ route('confirm_email', $user->activation_token) }}">
        {{ route('confirm_email', $user->activation_token) }}
    </a></p>

<p> if not you please lose it</p>
</body>
</html>
