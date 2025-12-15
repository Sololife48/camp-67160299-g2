@extends('template.default')

@section('content')
    <h1>this is my view 2</h1>
    <input type="text" id="myinput" value="input text value" />
    <button onclick="myfunc()">ตรวจสอบ</button>
    <button onclick="myfunc2()">ตรวจสอบ 2</button>
    <button onclick="myfunc3()">ตรวจสอบ 3</button>
@endsection

@push('scripts')
    <h1>my view 2 naja</h1>
@endpush
@push('scripts')
    <h1>my view 3 naja</h1>
@endpush

@push('scripts')
    <script>
        console.log("Error Log")
        alert("Welcome to JS")
    </script>
        <script>
        alert("Welcome to JS2")
    </script>
@endpush

@push('scripts')
    <script>
        myvar = 1;
        let myvar2
        console.log(myvar)
        console.log(myvar2)
    </script>

    <script>
        myvar2 = "My Vaar2"
        myvar2 = 2
        console.log(myvar,myvar2)
    </script>

    <script>
        function myfunc(){
            console.log(document.getElementById('myinput').value)
            console.log('myfunc called')
            return
        }
        let myfunc2 = function(){
            console.log('myfunc2 called')
        }
        myfunc3 = () => console.log('myfunc3 called')

        function myfunc4(callback){
            console.log('myfunc4 called')
            callback()
        }

        myfunc4(myfunc3)

        console.log(document.getElementById('myinput').value)
    </script>
@endpush    