<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"
      xmlns="http://www.w3.org/1999/html">


<table class="table">
    <thead>
    <tr>
        <th scope="col">Question</th>
        <th scope="col">Choice</th>
        <th scope="col">id</th>
        <th scope="col">*-*</th>
    </tr>
    </thead>
    <tbody>
    @foreach($question as $q)
        <tr>
            <th scope="row">{{$q->question}}</th>
            <td>{{$q->choice}}</td>
            <td>{{$q->id}}</td>

            <td><a href="{{url('delete_question',['id'=> $q->id])}}"><button>sil</button></a></td>
        </tr>
    @endforeach
    </tbody>
</table>


<div>
    @foreach($question as $q)

        <h4>{{$q->question}}</h4>
        @foreach(json_decode($q->choice) as $choices)
            <div>
                <input type="radio" id="{{$choices->id}}" name="{{$q->id}}">
            <label for="{{$choices->id}}">{{$choices->value}}</label>
            </div>
        @endforeach




    @endforeach

        <script>
            function print($q){
                for(var i=0;i<{{$q->choice}}.length;i++){
                }
            }
        </script>
</div>
