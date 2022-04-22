<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
@extends('layouts.app')

@section('content')
    <td><a href="/question_api"><button>soru</button></a></td>

<div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="display: flex; flex-direction: column; ">
                    <button onclick="clicksd()">şık ekle</button>

                    <form action="/question_new_add" style="float: left" method="post">
                        <h4>Soru ekle</h4>
                        <textarea name="question" style="width: 600px;margin-bottom: 50px"> </textarea>

                            <div id="choice"></div>

                        <button type="submit" id="submit-btn" class="btn btn-primary btn-block mb-4" style="margin-top:50px ">Send</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        var id =0;
        function clicksd(){
            id++;
            const choice = document.getElementById('choice');
            const input = document.createElement('input');
            input.name = `choice-${id}`;
            choice.appendChild(input);
        }
    </script>
    <script>
        $('#submit-btn').click(function () {
            $.ajax({
                url: '@Url.Action("Post","/question_new_add")',
                type: 'POST',
                dataType: 'json'
            })
        })
    </script>
    <style>
        input{
            flex-direction: column;
            margin: 50px;
            float: bottom;
        }
    </style>



@endsection
