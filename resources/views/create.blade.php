<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
    <h1>Create Post</h1>
    <form action="/posts" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="title">Slug</label>
            <input type="text" name="slug">
        </div>
        <div>
            <label for="title">Publish</label>
            <input type="checkbox" name="status" value="yes">
        </div>
        <div>
            <label for="title">Publish Date</label>
            <input type="text" name="date" placeholder="dd/mm/yy hh:mm">
            @error('date')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="title">Body</label>
            <textarea name="body" rows="3"></textarea>
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>