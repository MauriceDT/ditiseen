@include('partials.header')

<div class="vue-one_main-div">
    <h1>Hello, Vue :)</h1>

    <div id="app" class="vue-one_vue-div">
        <p>Author of the book is : @{{ author }}</p>
        <p>Title of the book is : @{{ title }}</p>
    </div>

    <a href="/"><button class="mau-button js-one_back-button">Back</button></a>

</div>

@include('partials.footer')
