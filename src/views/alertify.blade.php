@if (Session::has('odannyc.alertify.logs'))
    <script>
        @foreach(Session::pull('odannyc.alertify.logs') as $log)
            alertify.set('notifier','delay', {{ $log->delay }});
            alertify.set('notifier','position', '{{ $log->position }}');

            alertify.{{ $log->type }}('{{ $log->message }}');
        @endforeach
    </script>
@endif
