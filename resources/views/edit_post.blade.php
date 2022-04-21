<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body style="margin: 50px">
<form action="/edit_post" method="post">
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


    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
</form>

</body>
