<section class="navigation">

    @if (Auth::check())
    <h1>{{ Auth::user()->name }}</h1>
    @endif

    <a href="">
        <nav class="nav">Nav 1</nav>
    </a>
    <a href="">
        <nav class="nav">Nav 2</nav>
    </a>
    <a href="">
        <nav class="nav">Nav 3</nav>
    </a>
    <a href="">
        <nav class="nav">Nav 4</nav>
    </a>
    <a href="">
        <nav class="nav">Nav 5</nav>
    </a>
    <a href="">
        <nav class="nav">Nav 6</nav>
    </a>

</section>