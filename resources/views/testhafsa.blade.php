<!DOCTYPE html>

<head>
<meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body>
   
    <form data-action="{{route('therapists.store') }}" method="POST" id="add-project-form">
    <input id="id" name="randomone" value="heyoothisisid"></input>
    <input id="answer" name="randomtwo" value="whatsup"></input>
    <button type="submit">heyo</button>
    </form>
    

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){



$(form).on('submit', function(event){
    event.preventDefault();

    var url = $(this).attr('data-action');

    $.ajax({
        url: url,
        method: 'POST',
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(response)
        {
            console.log(response);
        },
        error: function(response) {
        }
    });
});

});

   
</script>
</html>