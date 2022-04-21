<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<form action="/postlar" method="post">
    <!-- Name input -->
    <div class="form-outline mb-4">
        <input type="text" id="form4Example1" class="form-control" name="title" />
        <label class="form-label" for="form4Example1">title</label>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="text" name="subject" id="form4Example2" class="form-control" />
        <label class="form-label" for="form4Example2">subject</label>
    </div>

    <!-- Message input -->
    <div class="form-outline mb-4">
        <input type="text" name="like" id="form4Example2" class="form-control" />

        <label class="form-label" for="form4Example3">like</label>
    </div>

    <!-- Checkbox -->
    <div class="form-check d-flex justify-content-center mb-4">
        <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
        <label class="form-check-label" for="form4Example4">
            Send me a copy of this message
        </label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
</form>
<div>,
    {{
    \Illuminate\Support\Facades\Auth::user()
     }}
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        @foreach($postlar as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->subject}}</td>
            <td>{{$post->like}}</td>
            <td><a href="{{url('edit_post',['id'=> $post->id])}}"><button onclick="remove({{$post->id}})">gücelle</button></a></td>

            <td><a href="{{url('delete_post',['id'=> $post->id])}}"><button onclick="remove({{$post->id}})">sil</button></a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script>
    function remove(id){
        fetch('http://127.0.0.1:8000/delete_post/' + id, {
            method: 'DELETE',
        })
    }
</script>
