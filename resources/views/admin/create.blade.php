@extends('layouts.app')

@section('title', 'Admin dashboard')

@section('main')

    <form action="/insert" method="post">
        @csrf
        <div>
            <label for="name">Name</label><br>
            <input style="border: 1px solid" type="text" name="name" />
        </div>
        <div>
            <label for="size">Size</label><br>
            <input style="border: 1px solid" type="text" name="size" />
        </div>
        <div>
            <label for="merek">merek</label><br>
            <input style="border: 1px solid" type="text" name="merek" />
        </div>
        <div>
            <label for="color">color</label><br>
            <input style="border: 1px solid" type="text" name="color" />
        </div>
        <div>
            <label for="description">description</label><br>
            <input style="border: 1px solid" type="text" name="description" />
        </div>
        <div>
            <label for="model_height">model_height</label><br>
            <input style="border: 1px solid" type="text" name="model_height" />
        </div>
        <div>
            <label for="category">category</label><br>
            <input style="border: 1px solid" type="text" name="category" />
        </div>
        <div>
            <label for="stock">stock</label><br>
            <input style="border: 1px solid" type="text" name="stock" />
        </div>
        <div>
            <label for="harga">harga</label><br>
            <input style="border: 1px solid" type="text" name="harga" />
        </div>

        <div>
            <label for="img">Img</label><br>
            <input style="border: 1px solid" type="text" name="img[]" />
        </div>
        <div>
            <label for="img">Img</label><br>
            <input style="border: 1px solid" type="text" name="img[]" />
        </div>
        <div>
            <label for="img">Img</label><br>
            <input style="border: 1px solid" type="text" name="img[]" />
        </div>
        <div>
            <label for="img">Img</label><br>
            <input style="border: 1px solid" type="text" name="img[]" />
        </div>
        <div>
            <label for="img">Img</label><br>
            <input style="border: 1px solid" type="text" name="img[]" />
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
