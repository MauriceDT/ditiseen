@include('partials.header')

<div class="home_background_div">
    <div class="home_center_div">
        <h1 class="home_h1">This is Maurice' Magical Test Environment</h1>

        <div class="container mt-8 flex space-x-7">

            <div class="card">
                <div class="card-content">
                    <h2 class="card-title">JavaScript - 001</h2>
                        <p class="card-body">Automatic refresher added to the page with raw JS</p>
                    <a href="/js-one"><button class="card-button">JS 001</button></a>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h2 class="card-title">JavaScript - 002</h2>
                        <p class="card-body">Simple 'To Do List', made with raw JS</p>
                    <a href="/js-two"><button class="card-button">JS 002</button></a>
                </div>
            </div>

            <div class="card vue-card">
                <div class="card-content">
                    <h2 class="card-title">Vue - 001</h2>
                        <p class="card-body">Calling Dynamic data with Vue</p>
                    <a href="/vue-one"><button class="card-button">Vue 001</button></a>
                </div>
            </div>

        </div>
    </div>
</div>

@include('partials.footer')
