@if($op->doctrine)
    <a
            href="{{ route('fitting.doctrineviewdetails', ['id' => $op->doctrine_id]) }}"
            target="_blank"
    >
        {{ $op->doctrine->name }}
    </a>
@endif
