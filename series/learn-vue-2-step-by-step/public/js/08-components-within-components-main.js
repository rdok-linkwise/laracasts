Vue.component('task-list', {
    template: `
        <div>
            <task v-for="task in tasks" v-text="task.description">
            </task>
        </div>
    `,

    data() {
        return {
            tasks: [
                {description: 'Go to the store', complete: true},
                {description: 'Go to the bank', complete: false},
                {description: 'Go to the farm', complete: true},
                {description: 'Go to work', complete: false}
            ]
        }
    }
});

Vue.component('task', {
    template: '<li><slot></slot></li>'
});

new Vue({
    el: '#root'
});