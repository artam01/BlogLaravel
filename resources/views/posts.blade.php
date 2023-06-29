<!DOCTYPE html>
<html>

<head>
    <title>My Application</title>
    <!-- CSS and other meta tags -->
</head>

<body>
    <header>
        <!-- Header content, e.g., logo, navigation menu -->
    </header>

    <main>
        @foreach ($posts as $post)
            <article>
                <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                <div>
                    <p>{{ $post->excerpt }}</p>
                </div>
            </article>
        @endforeach
    </main>

    <footer>
        <!-- Footer content -->
    </footer>


</body>

</html>
