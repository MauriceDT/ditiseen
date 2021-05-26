if (document.URL.includes("ditiseen.test/vue-one")) {

    window.onload = function () {

        const app = Vue.createApp({
            data() {
                return {
                    title: 'The Art of War',
                    author: 'Sun Tzu'
                }
            }
        })
        app.mount('#app')

    }

}
