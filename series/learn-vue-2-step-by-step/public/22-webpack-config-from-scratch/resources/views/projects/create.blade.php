<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.min.css"/>
    <title>Laravel</title>
</head>

<body>
<div id="app" class="container">
    @include('projects._partials.list')

    <example></example>

    <form
            method="POST"
            action="{!! route('projects.store') !!}"
            @submit.prevent="onSubmit"
            @keydown="form.errors.clear($event.target.name)"
    >

    <div class="control">
        <label for="name" class="label">Name</label>
        <input type="text" name="name" id="name" class="input" v-model="form.name">
        <span class="help is-danger" v-text="form.errors.get('name')" v-if="form.errors.has('name')"></span>
    </div>

    <div class="control">
        <label for="description" class="label">Description</label>

        <input type="text" name="description" id="description" class="input" v-model="form.description">

        <span class="help is-danger" v-text="form.errors.get('description')"></span>
    </div>

    <div class="control">
        <label for="comment" class="label">Comment</label>

        <input type="text" name="comment" id="comment" class="input" v-model="form.comment">

        <span class="help is-danger" v-text="form.errors.get('comment')"></span>
    </div>

    <div class="control">
        <button class="button is-primary" :disabled="form.errors.any()">Submit</button>
    </div>
    </form>
</div>

<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
