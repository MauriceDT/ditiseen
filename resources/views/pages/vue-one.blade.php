@include('partials.header')

<div class="vue-one_main-div">
    <h1>Hello, Vue :)</h1>
    <h2>Most, if not all of the content on this page</h1>
    <h2>is called by, or manipulated by Vue</h1>

    <div id="app" class="vue-one_vue-div">
        <div v-if="showInfo" class="vue-one_info-loop">
            <ul>
                <li v-for="person in persons" class="m-5">
                    <img :src="person.img" :alt="person.name" class="shadow-lg rounded max-w-md h-auto align-middle border-none">
                    <h3 class="vue-one_person-h3">@{{ person.name }}</h3>
                    <p>@{{ person.profession }}</p>
                    <p>@{{ person.city }}</p>
                </li>
            </ul>
        </div>

        <button class="mau-button m-6" @click="toggleShowInfo">
            <span v-if="showInfo">Hide Info</span>
            <span v-else>Show Info</span>
        </button>
        <a v-bind:href="url">
            <button class="mau-button">Youtube</button>
        </a>

        <br>
        {{--____________________________________________Mouse Events___--}}
        <div class="mt-5">
            <div class="vue-one_box" @mouseover="handleEvent">mouseover (enter)</div>
            <div class="vue-one_box" @mouseleave="handleEvent">mouseleave</div>
            <div class="vue-one_box" @dblclick="handleEvent">double-click</div>
            <div class="vue-one_box" @mousemove="handleMouseMove">position = @{{ x }} @{{ y }}</div>
        </div>

    </div>

    <a href="/"><button class="mau-button js-one_back-button">Back</button></a>

</div>

@include('partials.footer')
