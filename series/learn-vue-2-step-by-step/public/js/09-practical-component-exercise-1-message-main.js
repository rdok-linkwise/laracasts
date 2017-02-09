Vue.component('acme-message', {
    props: ['title', 'body'],
    data() {
        return {
            isVisible: true
        }
    },
    template: `
        <article class="message is-primary" v-show="isVisible">
            <div class="message-header">
                <p>{{ title }}</p>
                <button class="delete" @click="isVisible = false"></button>
            </div>
            <div class="message-body">
                {{ body }}
            </div>
        </article>
    `,
});

new Vue({
    el: '#root'
});