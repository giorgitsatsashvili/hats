<!DOCTYPE html>
<html lang="en">
<head>
    @include("partials/head")
</head>
<body>
    <header>
        @include("partials/header")
    </header>
    
    <main>
        @yield("content")
    </main>

    <footer>
        @include("partials/footer")
    </footer>

    {{-- js goes here --}}
    @include("partials/scripts")
</body>
</html>