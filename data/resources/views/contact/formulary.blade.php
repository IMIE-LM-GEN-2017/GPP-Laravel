@section('content')
    <form action="{{ route('contact') }}" method="post">
        <input type="text" name="dest" placeholder="destinataire">
        <input type="text" name="subject" placeholder="Sujet">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="envoyer">
        {{csrf_field()}}
    </form>
@endsection