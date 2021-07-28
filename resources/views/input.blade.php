<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Upload a file</title>
</head>

    <form method="POST" action="{{route('savemedia')}}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="file">Upload a file</label>
            <input type="file" name="file" class="hidden" />
            <button type="submit" name="submit">
                Submit
            </button>
        </div>
    </form>

</html>

