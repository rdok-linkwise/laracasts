import Errors from './Errors';

class Form {
    constructor(data) {
        this.fields = data;

        for (let field in data) {
            this[field] = data[field];
        }

        this.errors = new Errors();
    }

    data() {
        let data = {};

        for (let property in this.fields) {
            data[property] = this[property];
        }

        return data;
    }

    reset() {
        for (let field in this.fields) {
            this[field] = null;
        }

        this.errors.clear();
    }

    post(url) {
        return this.submit('post', url);
    }

    put(url) {
        return this.submit('put', url);
    }

    patch(url) {
        return this.submit('patch', url);
    }

    drop(url) {
        return this.submit('delete', url);
    }

    submit(method, url) {
        return new Promise((resolve, reject) => {
            axios[method](url, this.data())
                .then(response => {
                    this.onSuccess(response.data);

                    resolve(response.data);
                })
                .catch(error => {
                    this.onFail(error.response.data);

                    reject(error.response.data);
                })
        });
    }

    onSuccess(data) {
        alert(data.message);

        this.reset()
    }

    onFail(errors) {
        this.errors.record(errors);
    }
}

export default Form;
