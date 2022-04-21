<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <form action="/question" method="post">
                   <h4>Soru ekle</h4>
                   <textarea name="question" style="width: 600px;margin-bottom: 50px"> </textarea>
                   <h4>şıkları ekle</h4>

                   <textarea name="choice1" style="width: 600px;margin-bottom: 10px"> </textarea>
                   <textarea name="choice2" style="width: 600px;margin-bottom: 10px"> </textarea>
                   <textarea name="choice3" style="width: 600px;margin-bottom: 10px"> </textarea>
                   <textarea name="choice4" style="width: 600px;margin-bottom: 10px"> </textarea>

                   <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>

               </form>


                <button type="submit" class="btn  btn-block mb-4"><a href="/question_show">Soru sayfasına Git</a></button>

            </div>
        </div>
    </div>
</div>
@endsection
