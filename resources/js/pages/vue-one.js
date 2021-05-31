if (document.URL.includes("ditiseen.test/vue-one")) {

    window.onload = function () {

        const app = Vue.createApp({
            data() {
                return {
                    url: "https://youtube.com",
                    showInfo: true,
                    title: 'The Art of War',
                    author: 'Sun Tzu',
                    persons: [
                        { name: 'Maurice di Tolve', profession: 'Junior Front End Developer', city: 'Groningen', img: '/images/vue-one_persons/mauricedt.png' },
                        { name: 'Rick Grimes', profession: 'Zombie Apocalypse Survivor', city: 'Atlanta', img: '/images/vue-one_persons/rickgrimes.png' },
                        { name: 'Jon Snow', profession: 'King in the North', city: 'Winterfell', img: '/images/vue-one_persons/jonsnow.png' }
                    ],

                    x: 0,
                    y: 0
                }
            },
            methods: {
                changeName() {
                    this.name = 'Maurice di Tolve'
                },
                toggleShowInfo() {
                    this.showInfo = !this.showInfo
                },
                handleEvent(e) {
                    console.log(e)
                },
                handleMouseMove(e) {
                    this.x = e.offsetX;
                    this.y = e.offsetY;
                }
            }
        })
        app.mount('#app')

    }

}
