@include('partials.header')

<div class="js-two_main-div">
    <h1 class="js-two_h1">This is JS_Two</h1>

    <h2 class="js-two_h2">To Do List</h2>

    <div class="js-two_toDoContent">
        <input type="text" id="inputField" placeholder="Enter To-do"><button id="addToDo">+</button>
        <div class="to-dos" id="toDoContainer"></div>
    </div>

    <a href="/"><button class="mau-button">Back</button></a>
</div>

<div class="js-two_how-to-use">
    <h2>- Click on a To-Do once its complete</h2>
    <h2>- Double-Click on a To-Do to delete it</h2>
</div>



@include('partials.footer')
