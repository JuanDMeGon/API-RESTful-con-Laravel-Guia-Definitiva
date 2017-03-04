Hola {{$user->name}}
Gracias por crear una cuenta. Por favor verifícala usando el siguiente enlace:

{{route('verify', $user->verification_token)}}