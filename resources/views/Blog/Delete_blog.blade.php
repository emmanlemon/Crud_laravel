<form method="POST" action="blog/{{$posts->id}}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
        <input type="type" class="button" value="Delete">
</form>